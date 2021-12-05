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
				$r1=$_POST['head'];
                $r2=$_POST['place'];
                $r3=$_POST['date'];
                $r4=$_POST['time'];
                $r5=$_POST['news'];
			
$q="INSERT INTO news(head,place,date,time,news,img)VALUES('$r1','$r2','$r3','$r4','$r5','$name')";
$db->insertQuery($q);
echo $qry;
			}
			//echo"file uploaded successfully";
				// header('location:addstudent.php');

		}
	}
	}

	 header('location:add-news.php');
?>
			
?>
