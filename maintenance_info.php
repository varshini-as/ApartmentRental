<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'DBConnection.php';
$sql = "SELECT * FROM maintenance_bills";
$retval = $conn->query($sql);

?>
<html>
   <head>
        <title>Apartment Renting</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </head>
   <body>
     <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="home.php">RentalLife</a>
                </div>
                <ul class="nav navbar-nav float-right">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="logout_process.php">Log Out</a></li>
                </ul>
            </div>
     </nav>
   <center>
       <h3><b>Maintenance Receipts</b></h3>
       <br>
       <br>
       <table class="table table-hover" style="width: 600px;">
           <tr>
               <th>Owner ID</th>
               <th>Flat ID</th>
               <th>Bill No</th>
               <th>Service Cost</th>
           </tr>
           <?php while($row = $retval->fetch_assoc()){ ?>
           <tr>
               <td><?php echo "{$row['OID']}"; ?></td>
               <td><?php echo "{$row['FLAT_ID']}"; ?></td>
               <td><?php echo "{$row['BILL_NO']}"; ?></td>
               <td><?php echo "{$row['PAY']}"; ?></td>
                       
           </tr>
            <?php } ?>
       </table>
   </center>
       
   </body>
</html>
