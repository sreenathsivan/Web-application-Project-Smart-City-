<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$r1=$_POST['name'];
$r21=$_POST['time'];
$r22=$_POST['type'];
$r3=$_POST['fromplace'];
$r4=$_POST['toplace'];
$r2=$r21."".$r22;

 
$q="INSERT INTO bus(name,time,fromplace,toplace)VALUES('$r1','$r2','$r3','$r4')";
$db->insertQuery($q);
header('location:add-bus.php');

?>

