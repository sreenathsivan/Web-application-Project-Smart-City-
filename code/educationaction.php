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
				$r1=$_POST['type'];
                $r2=$_POST['name'];
                $r3=$_POST['address'];
                $r4=$_POST['email'];
                $r5=$_POST['phno'];
				$r6=$_POST['website'];
				
			
$q="INSERT INTO education(type,name,address,email,phno,website,img)VALUES('$r1','$r2','$r3','$r4','$r5','$r6','$name')";
$db->insertQuery($q);
echo $qry;
 header('location:add-education.php');
			}
			//echo"file uploaded successfully";
				// header('location:add-education.php');

		}
	}
	}

	
?>
			