<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$host = "localhost";
$userName = "root";
$password = "";
$dbName = "apartmentmanagement";
// Create database connection
$conn = mysqli_connect($host, $userName, $password, $dbName);
   
$tid = $_POST['tid'];
$sql = "SELECT * FROM tenant TID='$tid'";
if(($res = mysqli_query($conn,$sql)) == false){
    
        header("Location: delete_tenant_err.php");
    
}

    $name = $_POST['name'];
    $rent = $_POST['rent'];
    $deposit = $_POST['deposit'];
    $mail = $_POST['mail'];
    $number = $_POST['number'];
    if($name != ""){
        $sql = "UPDATE tenant SET TNAME='$name' WHERE TID='$tid'";
        $res = mysqli_query($conn, $sql);
    }
    if($rent != NULL){
        $sql = "UPDATE agreement SET RENT_AMT='$rent' WHERE TID='$tid'";
        $res = mysqli_query($conn, $sql);
    }
    if($deposit != NULL){
        $sql = "UPDATE agreement SET DEPOSIT='$name' WHERE TID='$tid'";
        $res = mysqli_query($conn, $sql);
    }
    if($mail != ""){
        $sql = "UPDATE tenant SET TMAIL='$mail' WHERE TID='$tid'";
        $res = mysqli_query($conn, $sql);
    }
    if($number != NULL){
        $sql = "UPDATE tenant SET PHONE='$number' WHERE TID='$tid'";
        $res = mysqli_query($conn, $sql);
    }
    //header("Location: update_tenant_success.php");
?>
<html>
   <head>
        <title>Apartment Renting</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script>
        $(document).ready(function(){
        $("#myModal").modal('show');
        });
        </script>

        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4>Tenant record updated successfully.</h4>
                        <h4><a href="login.php">Click here</a> to go back to login and see the updated details.</h4>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>