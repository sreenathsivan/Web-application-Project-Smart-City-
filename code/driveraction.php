<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$r1=$_GET['name'];
$r2=$_GET['place'];
$r3=$_GET['email'];
$on=$_GET['oname'];
$ln=$_GET['lno'];
$r4=$_GET['phno'];
$r5=$_GET['upass'];
$r6=$_GET['cpass'];
$uname=$_GET['uname'];
if($r5==$r6)
{
/*$q="INSERT INTO register(name,place,email,phno)VALUES('$r1','$r2','$r3','$r4')";
$db->insertQuery($q);
$s="select max(rid) as id from register";
$rs=$db->selectData($s);
$row=mysql_fetch_array($rs);
$r=$row['id'];*/
$q="INSERT INTO driver(dname,place,email,phno,oname,licno)VALUES('$r1','$r2','$r3',$r4,'$on','$ln')";
$db->insertQuery($q);
$s="select max(dvid) as id from driver";
$rs=$db->selectData($s);
$row=mysql_fetch_array($rs);
$r=$row['id'];
$q1="INSERT INTO login(uid,uname,upass,cpass,email,utype)VALUES($r,'$uname','$r5','$r6','$r3','driver')";
$db->insertQuery($q1);
header('location:add-taxidrivers.php');
}
else
{
	echo "<script> alert('Password not matched'); window.location='add-taxidrivers.php'; </script>";
}

?>

