<?php
include("DatabaseCon.php");
$db=new DatabaseCon;
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
                $r2=$_POST['location'];
                $r3=$_POST['descr'];
				$dist=$_POST['dist'];
                
			
$q="INSERT INTO tourism(name,location,descr,img,dist)VALUES('$r1','$r2','$r3','$name',$dist)";
$db->insertQuery($q);
$s="INSERT INTO distance(frm,des,km)VALUES('konni','$r1',$dist)";
$db->insertQuery($s);
echo $qry;
			}
			//echo"file uploaded successfully";
				// header('location:addstudent.php');

		}
	}
	}

 	 header('location:add-tourism.php');
?>
			
?>
