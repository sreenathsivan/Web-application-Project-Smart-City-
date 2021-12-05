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
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <style>
	body {background-image:url(images/.jpg);
	background-repeat:no-repeat;
	background-size:cover;
	}
	.tbox {background-color:#C30;
	margin-left:100px;
	height:50px;
	width:300px;
	color:white;
	
	}
	.lbox{background-color:#F30;
	margin-left:200px;
	color:white;
	width:100px;
	height:50px;
	}
	.ll{margin-left:10px;
	font-size:18px;
	}
	.regf{background-image:url(images/r6.jpg);
		/*background-color:black;*/	margin-top:200px;
		color:black;
		
	}
	</style>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container" style="background-color:#909">
        <a class="navbar-brand" href="index.html">Voyage</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            
            <li class="nav-item"><a href="" class="nav-link"></a></li>
            <li class="nav-item"><a href="" class="nav-link"></a></li>
            <li class="nav-item"><a href="register.php" class="nav-link">Register</a></li>
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
  
    <!-- END slider -->
 <div class="reg" align="center">
    <form action="regaction.php" onSubmit="return check();">
<table class="regf">
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td><h2><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
SignUp
</center></b></h2></td></tr>
<tr><td>&nbsp;</td></tr>
  <tr>
    <th class="ll">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
     <b>Name</b></th>
    <td><input name="name" id="name" type="text" class="tbox" required/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr><tr><td>&nbsp;</td></tr>
  <tr>
    <th class="ll">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <b>Place</b></th>
    <td><input name="place" type="textarea" class="tbox"required />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
  </tr><tr><td>&nbsp;</td></tr>
  <tr>
    <th class="ll">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <b>Phone_No</b></th>
    <td><input name="ph" id="ph" maxlength="12" minlength="10" type="text" class="tbox" required/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </td>
  </tr><tr><td>&nbsp;</td></tr>
   <tr>
    <th class="ll">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>User Name</b></th>
    <td><input name="uname" type="text"class="tbox"required />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr><tr><td>&nbsp;</td></tr>
  <tr>
  <tr>
    <th class="ll">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Email</b></th>
    <td><input name="email" type="text"class="tbox"required />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr><tr><td>&nbsp;</td></tr>
  <tr>
    <th class="ll">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Password</b></th>
    <td><input name="up" type="password"class="tbox"required />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr><tr><td>&nbsp;</td></tr>
  <tr>
    <th class="ll">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Confirm Password</b></th>
    <td><input name="cp" type="password"class="tbox"required />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr><tr><td>&nbsp;</td></tr>
  <tr><td><input name="Register" type="submit" value="Register" class="lbox"/></td></tr>
  <tr><td>&nbsp;</td></tr>
 
</table>
</form></div>
   

   

   
         
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
  <script type="text/javascript">
var letters=/^[a-z A-Z]+$/;
var numbers=/^[0-9]+$/;
function check()
{
	if(!document.getElementById("name").value.match(letters))
	{
		alert("please input alphabets only,enter name");
		return false;
	}
	else if(!document.getElementById("ph").value.match(numbers))
	{
		alert("please input numbers only,enter phone number");
		return false;
	}
	else if(document.getElementById("ph").value.length<10)
	{
		alert("please input 10 digits only,enter phone number");
		return false;
	}
	else
	{
		return true;
	}
}

</script>
</html>