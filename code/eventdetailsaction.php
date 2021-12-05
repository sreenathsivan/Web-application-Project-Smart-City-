<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$r1=$_POST['category'];
$r2=$_POST['amount'];

$q="INSERT INTO event_details(category,amount)VALUES('$r1','$r2')";
$db->insertQuery($q);
header('location:add-eventdetails.php');


?>
