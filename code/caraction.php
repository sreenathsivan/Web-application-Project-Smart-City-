<?php
include "DatabaseCon.php";
$db=new DatabaseCon;

session_start();
$val=$_SESSION['uid'];
if(isset($_POST['submit']))
{
	$name=$_FILES['file']['name'];
$tmpname=$_FILES['file']['tmp_name'];
	if(isset($name))
	{
		if(!empty($name))
		{
			$location='uploads/';
			echo"file is".$name;
			if(move_uploaded_file($tmpname,$location.$name))
			{



$r1=$_POST['no'];
$r2=$_POST['name'];
//$r3=$_POST['drname'];
//$r4=$_POST['lno'];
$r5=$_POST['type'];
$r6=$_POST['phno'];
$r7=$_POST['np'];
$r8=$_POST['mc'];

 
$q="INSERT INTO cars(cno,uid,name,type,phno,max_pass,min,img)VALUES('$r1','$val','$r2','$r5','$r6',$r7,$r8,'$name')";
$db->insertQuery($q);
header('location:add-cars.php');
}
			//echo"file uploaded successfully";
				// header('location:addstudent.php');

		}
	}
	}

?>

