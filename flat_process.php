<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 <?php
                            include 'DBConnection.php';
                            if(isset($_POST['submit'])){
                                $floor = $_POST['floor'];
                                $type = $_POST['flat_type'];
                                $oid = $_POST['oid'];
                                $flat_sql = "INSERT INTO apartment(FLOOR,FLAT_TYPE,S_ID,OID,FLAT_STATUS) VALUES ('$floor','$type',1,'$oid','Not occupied')";
                                
                                if (!$conn -> query($flat_sql)) {
  echo("Errorcode: " . $conn -> errno);
}                               
if($conn->query($flat_sql)){
                                    echo "success!";
                                
                            
                            
                            } }?>
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
                        <h4>Record inserted successfully.</h4>
                        <h4><a href="login.php">Click here</a> to login and see the new flat details.</h4>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
                            
