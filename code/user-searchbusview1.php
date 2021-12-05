
<?php
		include "DatabaseCon.php";
			            $db=new DatabaseCon;
			//$val=$_SESSION['uid'];
			$te=$_GET['toplace'];
			$init=$_GET['init'];
			$sunrise = date("H:i", strtotime("$init"));
			$final=$_GET['final'];
			$sunset = date("H:i", strtotime("$final"));
			echo $sunrise;
			echo $sunset;
			
			$s="select * from bus where toplace='$te'";
			$rs=$db->selectData($s);
           while($row=mysql_fetch_array($rs))
{
	    
		 date_default_timezone_set("Asia/Calcutta");
           
		  $current_time=$row['time'];
		  
		  
		  
		  $date1 = DateTime::createFromFormat('H:i', $current_time);
          $date2 = DateTime::createFromFormat('H:i', $sunrise);
          $date3 = DateTime::createFromFormat('H:i', $sunset);
		  
		 
          if ($date1 >= $date2 && $date1 <= $date3)
          {
			 // echo "hai";
			 echo $row['name'];
			 $i++;
            
		 }
}
if($i>0)
{
	echo "hai";
}
             
       ?>      
			 
		

		  
