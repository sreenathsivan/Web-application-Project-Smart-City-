<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
session_start();
$vid=$_SESSION['uid'];
$id=$_GET['n'];
$cnum=$_GET['cardno'];
$cvv=$_GET['ccv'];
$ctype=$_GET['type'];
$edate=$_GET['exdate'];

$date=$_GET['date'];


 
$q="INSERT INTO payment(vid,eid,cnum,cvv,ctype,edate,date)VALUES('$vid','$id','$cnum','$cvv','$ctype','$edate','$date')";
$db->insertQuery($q);

$s="update carbook set status='paid' where book_id='$id'";
$db->updateQuery($s);
//header('location:myevents.php');
echo "<script> alert('Successfully Paid.'); window.location='mycarbookingstatus.php'; </script>";


?>

