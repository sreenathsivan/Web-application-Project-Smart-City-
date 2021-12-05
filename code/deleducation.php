<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];
$q="delete from education where edu_id='$id'";
$db->insertQuery($q);
header('location:educationview.php');
?>




