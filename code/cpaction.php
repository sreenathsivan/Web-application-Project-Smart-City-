<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
//session_start();
//$vid=$_SESSION['uid'];
$id=$_GET['em'];
$np=$_GET['np'];
$cp=$_GET['cp'];

if($np==$cp)
{

$s="update login set upass='$np',cpass='$cp' where email='$id'";
$db->updateQuery($s);
//header('location:myevents.php');
echo "<script> alert('Successfully Changed.'); window.location='index.php'; </script>";
}
else
{
echo "<script> alert('Password not matched.'); window.location='cp.php'; </script>";
}
?>

