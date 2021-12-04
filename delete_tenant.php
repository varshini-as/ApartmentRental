<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'DBConnection.php';

    $oid = $_POST['oid'];
    $tid = $_POST['tid'];
    $sql = "SELECT * FROM agreement WHERE TID='$tid'";
    $res = $conn->query($sql);
    if(mysqli_num_rows($res)==0){
        header("Location: delete_tenant_err.php");
    }
    else{
    $sql = "DELETE FROM agreement WHERE TID='$tid'";
    if($conn->query($sql)){
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
                        <h4>Tenant details deleted successfully.</h4>
                        <h4><a href="login.php">Login</a> to see the new changes.</h4>
                    </div>
                </div>
            </div>
        </div>
        </body>
</html>
<?php
        
    }
    }
    
?>
        

