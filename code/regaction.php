<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$r1=$_GET['name'];
$r2=$_GET['place'];
$r3=$_GET['email'];
$r4=$_GET['ph'];
$r5=$_GET['up'];
$r6=$_GET['cp'];
$uname=$_GET['uname'];
if($r5==$r6)
{
$q="INSERT INTO register(name,place,email,phno)VALUES('$r1','$r2','$r3','$r4')";
$db->insertQuery($q);
$s="select max(rid) as id from register";
$rs=$db->selectData($s);
$row=mysql_fetch_array($rs);
$r=$row['id'];
$q1="INSERT INTO login(uid,uname,upass,cpass,email,utype)VALUES($r,'$uname','$r5','$r6','$r3','user')";
$db->insertQuery($q1);

/*echo "<script> alert('Successfully regestered'); window.location='index.php'; </script>"; */
header('location:index.php');
}
else 
{
	echo "<script> alert('Password not matched'); window.location='register.php'; </script>";
}
?>