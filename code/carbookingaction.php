<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
session_start();
$uid=$_SESSION['uid'];

$car_id=$_POST['car_id'];
$dr_id=$_POST['dr_id'];
$frm=$_POST['from'];
$des=$_POST['des'];
$date=$_POST['date'];
$time=$_POST['time'];
$phno=$_POST['phno'];
$pass=$_POST['pass'];
$trip=$_POST['trip'];
$wt=$_POST['wt'];

$q1="select *from cars  where car_id=$car_id"; 
$rs=$db->selectData($q1);
$row=mysql_fetch_array($rs);
$m=$row['max_pass'];
$ma=$row['min'];

$q2="select *from distance  where des='$des'"; 
$rs2=$db->selectData($q2);
$row2=mysql_fetch_array($rs2);
$di=$row2['km'];
$am=$ma*$di;


$time2 = "$wt:00";


$secs = strtotime($time2)-strtotime("00:00");
$result = date("H:i",strtotime($time)+$secs);
$i=0;
    //echo $result;
$q3="select *from carbook where car_id=$car_id AND status='paid'AND    date='$date'";
$rs3=$db->selectData($q3);
while($row3=mysql_fetch_array($rs3))
    {
	   $sunrise=$row3['time'];
		  
		$sunset=$row3['endtime'];
		 //echo "start".$sunrise;
		  //echo "end".$sunset;
		  //echo "current".$time;
		  
		  
		  date_default_timezone_set("Asia/Calcutta");
		  $current_time=$time;

		  
		  
		  $date1 = DateTime::createFromFormat('H:i', $current_time);
          $date2 = DateTime::createFromFormat('H:i', $sunrise);
          $date3 = DateTime::createFromFormat('H:i', $sunset);
		  
		 
         if ($date1 >= $date2 && $date1 <= $date3)
          {
			  
             //echo 'here' on the way; 
             
             
			 $i++; 
			
          }
     }
	echo $i;
	

if($i>0)

	
  {
	  		 echo "<script> alert('This time was booked used by anothe user   user ,Please change your booking time or car ');window.location='user-carview.php'; </script>"; 
  }
  else if($m<$pass)
  {
	  echo "<script> alert('Passenger limit exceed.');window.location='user-carview.php'; </script>";
	  
  }
else
{ 

 
	

 
      $q="INSERT INTO          carbook(uid,car_id,dr_id,frm,des,date,time,endtime,phno,pass,trip,wt,status,amt)VALUES('$uid','$car_id','$dr_id','$frm','$des','$date','$time','$result','$phno',$pass,'$trip',$wt,'pending','$am')";
$db->insertQuery($q);
header('location:user-carview.php');
}
	  
	  

?>

