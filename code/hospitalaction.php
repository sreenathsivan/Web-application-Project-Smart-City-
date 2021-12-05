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
                $r2=$_POST['address'];
                $r3=$_POST['email'];
                $r4=$_POST['phno'];
                $r5=$_POST['website'];
			
$q="INSERT INTO hospital(name,address,email,phno,website,img)VALUES('$r1','$r2','$r3','$r4','$r5','$name')";
$db->insertQuery($q);
echo $qry;
			}
			//echo"file uploaded successfully";
				// header('location:addstudent.php');

		}
	}
	}

	 header('location:add-hospital.php');
?>
			
?>

