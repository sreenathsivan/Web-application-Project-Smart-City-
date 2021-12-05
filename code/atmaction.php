<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$r1=$_POST['place'];
$r2=$_POST['landmark'];

$q="INSERT INTO atm(place,landmark)VALUES('$r1','$r2')";
$db->insertQuery($q);
header('location:add-atm.php');


?>

