<?php
include("DatabaseCon.php");
$db=new DatabaseCon;
session_start();
$val=$_SESSION['uid'];
$r8=$_POST['cat'];
echo $r8;
if($r8=='imagetext')
{
	//echo "image text";
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
				$r1=$_POST['name'];
                $r2=$_POST['email'];
                $r3=$_POST['phno'];
                $r4=$_POST['aadar'];
                $r5=$_POST['event_from'];
				$r6=$_POST['event_to'];
				$r7=$_POST['subject'];
				//$r8=$_POST['cat'];
					
					$s="select * from event_details where category='$r8'";
					$rs=$db->selectData($s);
					$row=mysql_fetch_array($rs);
					$r=$row['amount'];
					$am=$r*$r6;
			
$q="INSERT INTO event(vid,name,email,phno,aadar,event_from,event_to,subject,img,status,type,amt)VALUES($val,'$r1','$r2','$r3','$r4','$r5','$r6','$r7','$name','pending','$r8','$am')";
$db->insertQuery($q);
//header('location:add-event.php');
echo "<script> alert('Request send'); window.location='add-event.php'; </script>";

			}
			//echo"file uploaded successfully";
				// header('location:addstudent.php');

		}
	}
	}

}
else if($r8=='text')
{
            	$r1=$_POST['name'];
                $r2=$_POST['email'];
                $r3=$_POST['phno'];
                $r4=$_POST['aadar'];
                $r5=$_POST['event_from'];
				$r6=$_POST['event_to'];
				$r7=$_POST['subject'];
				$r8=$_POST['cat'];
					
				$s="select * from event_details where category='$r8'";
				$rs=$db->selectData($s);
				$row=mysql_fetch_array($rs);
				$r=$row['amount'];
				$am=$r*$r6;
				
				$q="INSERT INTO event(vid,name,email,phno,aadar,event_from,event_to,subject,status,type,amt)VALUES($val,'$r1','$r2','$r3','$r4','$r5','$r6','$r7','pending','$r8','$am')";
$db->insertQuery($q);
//header('location:add-event.php');
echo "<script> alert('Request send'); window.location='add-event.php'; </script>";
	
}
else if($r8=='image')
{
	//echo "image text";
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
				$r1=$_POST['name'];
                $r2=$_POST['email'];
                $r3=$_POST['phno'];
                $r4=$_POST['aadar'];
                $r5=$_POST['event_from'];
				$r6=$_POST['event_to'];
				
				//$r8=$_POST['cat'];
					
					$s="select * from event_details where category='$r8'";
					$rs=$db->selectData($s);
					$row=mysql_fetch_array($rs);
					$r=$row['amount'];
					$am=$r*$r6;
			
$q="INSERT INTO event(vid,name,email,phno,aadar,event_from,event_to,img,status,type,amt)VALUES($val,'$r1','$r2','$r3','$r4','$r5','$r6','$name','pending','$r8','$am')";
$db->insertQuery($q);
//header('location:add-event.php');
echo "<script> alert('Request send'); window.location='add-event.php'; </script>";

			}
			//echo"file uploaded successfully";
				// header('location:addstudent.php');

		}
	}
	}

}
else if($r8=='video')
{
	//echo "image text";
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
				$r1=$_POST['name'];
                $r2=$_POST['email'];
                $r3=$_POST['phno'];
                $r4=$_POST['aadar'];
                $r5=$_POST['event_from'];
				$r6=$_POST['event_to'];
				
				//$r8=$_POST['cat'];
					
					$s="select * from event_details where category='$r8'";
					$rs=$db->selectData($s);
					$row=mysql_fetch_array($rs);
					$r=$row['amount'];
					$am=$r*$r6;
			
$q="INSERT INTO event(vid,name,email,phno,aadar,event_from,event_to,video,status,type,amt)VALUES($val,'$r1','$r2','$r3','$r4','$r5','$r6','$name','pending','$r8','$am')";
$db->insertQuery($q);
//header('location:add-event.php');
echo "<script> alert('Request send'); window.location='add-event.php'; </script>";

			}
			//echo"file uploaded successfully";
				// header('location:addstudent.php');

		}
	}
	}

}

?>
	