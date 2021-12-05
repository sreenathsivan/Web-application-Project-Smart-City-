<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$r1=$_POST['frm'];
$r2=$_POST['des'];
$r3=$_POST['km'];


 
$q="INSERT INTO distance(frm,des,km)VALUES('$r1','$r2','$r3')";
$db->insertQuery($q);
header('location:add-distance.php');

?>

