<?php
include("DatabaseCon.php");
$db=new DatabaseCon;
$id=$_GET['id'];
$q="update event set status='rejected' where e_id='$id'";
$db->updateQuery($q);
header('location:eventstatus.php');
?>
