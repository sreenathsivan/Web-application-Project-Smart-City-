<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Voyage - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <?php 
  session_start();
  if($_SESSION['uid']=="" || $_SESSION['uid']=='null')
  header('location:index.php');
  ?>

</head>
  <body>
    
     <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a  href="adminhome.php" ><img src="images/logo3.png" width="100" height="100"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
         </button>

        
        
         <nav class="navbar navbar-inverse" style="background-color:#0CF">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <li><a href="adminhome.php"><font color="green">Home</font></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       
     
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><font color="green">Add</font></a>
        <ul class="dropdown-menu">
          <li><a href="add-education.php">Educational Institute</a></li>
          <li><a href="add-hospital.php">Hospitals</a></li>
          <li><a href="add-atm.php">ATM</a></li>
           <li><a href="add-bus.php">Bus</a></li>
            <li><a href="add-hotel.php">Hotels</a></li>
             <li><a href="add-tourism.php">Tourism</a></li>
             <li><a href="add-taxidrivers.php">Taxi Drivers</a></li>
             <li><a href="add-news.php">News</a></li>
        </ul>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View</a>
        <ul class="dropdown-menu">
         <li><a href="educationview.php">Educational Institute</a></li>
          <li><a href="hospitalview.php">Hospitals</a></li>
          <li><a href="atmview.php">ATM</a></li>
           <li><a href="busview.php">Bus</a></li>
            <li><a href="hotelview.php">Hotels</a></li>
             <li><a href="tourismview.php">Tourism</a></li>
             <li><a href="viewtaxidrivers.php">Taxi Drivers</a></li>
             <li><a href="admin-newsview.php">News</a></li>
        </ul>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Events</a>
        <ul class="dropdown-menu">
         <li><a href="eventstatus.php">Event Requset</a></li>
          <li><a href="viewevent.php">View Events</a></li>
          <li><a href="add-eventdetails.php">Event details</a></li>
           <li><a href="eventdetailsview.php">View event details</a></li>
            
        </ul>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
       <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
  
        
        
        
          <!--<ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="tours.html" class="nav-link">Tours</a></li>
            <li class="nav-item"><a href="hotels.html" class="nav-link">Hotels</a></li>
            <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
          </ul>-->
          
        </div>
      </div>
    </nav>
    <!-- END slider -->
<section></section>

   

   

   <section class="ftco-section bg-light">
      <div class="container">
        <div class="row">
          <?php
			include "DatabaseCon.php";
			$db=new DatabaseCon;
			//$val=$_SESSION['uid'];
			$s="select * from news";
			$rs=$db->selectData($s);
			while($row=mysql_fetch_array($rs))
			{
				?>
        
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="blog-entry">
              <a href="" class="block-20" style="background-image: url('uploads/<?php echo $row['img'];?>');">
              </a><a href="delnews.php?id=<?php echo $row['n_id'];?>"> Delete</a>
              <div class="text p-4">
                <div class="meta">
                  <div><a href="#"><?php echo $row['date'];?></a>
                  
                  
                  <div><a href="#"><?php echo $row['place'];?></a></div>
                  <div><a href="#"><font color="#FF0000">Time&nbsp;:&nbsp;<?php 
				$timet=$row['time'];
				$time_in_12_hour_format  = date("g:i a", strtotime("$timet"));
				echo $time_in_12_hour_format ;
				
				
				
				?></a></font>
                  <h3 class="heading"><font size="+2"<a href="#"><?php echo $row['head'];?></a></font></h3></div>
                <h3 class="heading"><a href="#"><?php echo $row['news'];?></a></h3>
                  </div></div></div>
                
                 <!-- <a href="#" class="float-left">Read more</a>
                  <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>-->
                
                
                 <!-- <a href="#" class="float-left">Read more</a>
                  <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>-->
               
            </div>
          </div>
          <?php } ?>
    </section>

          <!--<div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-around"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Travel Arrangements</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-compass"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Private Guide</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-map-of-roads"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Location Manager</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>-->
        </div>
      </div>
    </section>

    

    

   

    
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>