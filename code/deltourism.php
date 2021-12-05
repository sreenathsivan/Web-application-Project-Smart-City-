<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];
$q="delete from tourism where t_id='$id'";
$db->insertQuery($q);
header('location:tourismview.php');
?>




