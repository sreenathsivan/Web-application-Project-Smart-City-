<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];
$q="delete from news where n_id='$id'";
$db->insertQuery($q);
header('location:admin-newsview.php');
?>

