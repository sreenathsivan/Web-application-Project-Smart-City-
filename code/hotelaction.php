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
				$r6=$_POST['descr'];
			
$q="INSERT INTO hotel(name,address,email,phno,website,descr,img)VALUES('$r1','$r2','$r3','$r4','$r5','$r6','$name')";
$db->insertQuery($q);
echo $qry;
			}
			//echo"file uploaded successfully";
				// header('location:addstudent.php');

		}
	}
	}

	 header('location:add-hotel.php');
?>
			

