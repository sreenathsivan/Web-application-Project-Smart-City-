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
    
    
  <style>
  body {background-image:url(images/b9.jpg);
  background-size:cover;
  }</style>
 
</head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Voyage</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        
        
         <nav class="navbar navbar-inverse" style="background-color:#0CF">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <li><a href="userhome.php"><font color="green">Home</font></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <li><a href="profile.php"><font color="green">Profile</font></a></li>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><font color="green">View</font></a>
        <ul class="dropdown-menu">
         <li><a href="user-educationview.php">Educational Institute</a></li>
          <li><a href="user-hospitalview.php">Hospitals</a></li>
          <li><a href="user-atmview.php">ATM</a></li>
           <li><a href="user-busview.php">Bus</a></li>
            <li><a href="user-hotelview.php">Hotels</a></li>
             <li><a href="user-tourismview.php">Tourism</a></li>
             <li><a href="user-carview.php">Cars</a></li>
        </ul>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><font color="green">Events</font></a>
        <ul class="dropdown-menu">
         <li><a href="add-event.php">Event Requset</a></li>
          <li><a href="myevents.php">My Events</a></li>
          
        </ul>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <li><a href="mycarbookingstatus.php"><font color="green">My Bookings</font></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
       <li><a href="logout.php"><font color="green">Logout</font></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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

   

   

    <section class="ftco-section">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center mb-5 pb-5 ftco-animate">
          <div class="col-md-7 text-center heading-section">
            <h2>Hotels in the City</h2>
          </div>
        </div>
        <div class="row no-gutters">
        
         <?php
			include "DatabaseCon.php";
			$db=new DatabaseCon;
			//$val=$_SESSION['uid'];
			$s="select * from hotel";
			$rs=$db->selectData($s);
			while($row=mysql_fetch_array($rs))
			{
							?>
                            
            <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="#" class="block-5" style="background-image: url('uploads/<?php echo $row['img']; ?>');">
              <div class="text">
                <span class="price"><?php echo $row['phno']; ?></span>
                <h3 class="heading"><?php echo $row['name']; ?></h3>
                <div class="post-meta">
                  <span><?php echo $row['address']; ?></span>
                  <span><?php echo $row['website']; ?></span>
                </div>
                <div class="post-meta">
                  
                  <span><?php echo $row['website']; ?></span>
                </div>
                <p class="star-rate"><span><?php echo $row['email']; ?></span></p>
              </div>
            </a>
        
          <div class="text p-4">
                 
                  <h5 class="heading"><a href="#"><?php echo $row['descr']; ?></a></h5>
                  <p class="clearfix">
                    <a href="#" class="float-left"><?php echo $row['address']; ?></a>
                    <a href="#" class="float-right meta-chat"><?php echo $row['phno']; ?></a>
                  </p>
                
                            
                            
                         </div></div>
       
          
          
                             
                            
                            
          
         <?php } ?></div></div>
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