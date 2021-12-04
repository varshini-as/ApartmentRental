<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'DBConnection.php';


    $tname = $_POST['tname'];
    $tage = (int)$_POST['tage'];
    $tphone = (int)$_POST['tphone'];
    $deposit = $_POST['deposit'];
    $rent = $_POST['rent'];
    $tenure = $_POST['tenure'];
    $occupation = $_POST['toccupation'];
    $agr_date = $_POST['agr_date'];
    $tmail = $_POST['tmail'];
    $flatid = $_POST['flatid'];
    $oid = $_POST['oid'];
    
    $sql5 = "SELECT * FROM tenant WHERE TNAME='$tname'";
    //$res5 = $conn->query($sql5);
    if(($res5 = mysqli_query($sql5)) != FALSE){
        header("Location: existing_tenant.php");
    }
    
    $sql4 = "SELECT FLAT_STATUS FROM apartment FLAT_ID='$flatid' AND FLAT_STATUS='Occupied'";
    if($retval = mysqli_query($sql4)){
        
            header("Location: occupied_flat.php");
        
    }

    $sql = "INSERT INTO tenant(TNAME,TAGE, TMAIL, PHONE, TOCCUPATION, TACCOMPANY, FLAT_ID) VALUES  ('$tname','$tage','$tmail','$tphone','$occupation','1','$flatid');";
    
    if ($conn->query($sql) === TRUE) {
        echo 'Record inserted successfully';  
        $sql2 = "SELECT * FROM tenant WHERE TMAIL='$tmail'";
        $res2 = mysqli_query($conn, $sql2);
        $row2 = $res2->fetch_assoc();
        $tid = $row2['TID'];
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $sql2 = "INSERT INTO agreement(TID, OID, FLAT_ID, AGREE_DATE, TENURE, DEPOSIT, RENT_AMT) VALUES ('$tid','$oid','$flatid','$agr_date','$tenure','$deposit','$rent')";
    if($conn->query($sql2) === TRUE){
        
    }
    else{
        echo "Error: " . $sql2 . "<br>" . $conn->error;
    }
    $sql3 = "UPDATE apartment SET FLAT_STATUS = 'Occupied' WHERE FLAT_ID='$flatid'";
?>

<html>
    <head>
        <title>Apartment Renting</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="design.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">RentalLife</a>
                </div>
                <ul class="nav navbar-nav float-right">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Properties</a></li>
                <li><a href="#">Rental Services</a></li>
                <li><a href="#">Property Services</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="jumbotron">
                
                
                <h3>Entered Tenant Details:</h3>
                <h4>Tenant Name:<?php $tname?></h4>
                <h4>Flat ID: <?php $flatid?></h4>
                <h4>Rent:<?php $rent?></h4>
                <h4>Deposit Amount:<?php $deposit?></h4>
                
            </div>
        </div>
        <footer>
            <center>
                <h6>Copyright © RentalLife | All rights reserved. | Contact Us: +91 9000 9000</h6>
            </center>
        </footer>
    </body>
</html>
<?php
if($conn->query($sql3) === TRUE){
        header("LOCATION: tenant_process.php");
    }
    else{
        echo "Error: " . $sql3 . "<br>" . $conn->error;
    }
    ?>