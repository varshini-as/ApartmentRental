<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'DBConnection.php';
$oid = $_POST['oid'];
$fid = $_POST['flatid'];
$cost = $_POST['services'];
$sql = "CALL update_bill('$oid','$fid','$cost')";
if($conn->query($sql)){
    header("Location: bill_success.php");
}
else{
    echo 'Error!';
}
?>