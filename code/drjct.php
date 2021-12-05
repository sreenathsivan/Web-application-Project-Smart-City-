<?php
include("DatabaseCon.php");
$db=new DatabaseCon;
$id=$_GET['id'];
$q="update carbook set status='unavailable' where book_id='$id'";
$db->updateQuery($q);
//header('location:carbookingstatus.php');
echo "<script> alert('Status updated.');window.location='carbookingstatus.php'; </script>";
?>
