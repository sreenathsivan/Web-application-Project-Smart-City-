<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];
$q="delete from cars where car_id='$id'";
$db->insertQuery($q);
header('location:mycar.php');
?>

