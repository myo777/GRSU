<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <title>GRSU</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/style.css">
    <link rel="stylesheet" href="static/app.css">
    <link rel="stylesheet" href="static/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
    

 
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>


<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>


</head>

<body>

	<!-- header section start -->

<header>
<nav>
  <ul>
  

    <li><a href="index.php">HOME</a></li>
    
    <div class="dropdown">
      <button class="dropbtn">ABOUT US
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="about.php">ABOUT US</a>
        <a href="partners.php">PARTNERS</a>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn">NEWS
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="news.php">LATEST NEWS</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">POST 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="create_public_news.php">POST PUBLIC NEWS</a>
      </div>
    </div> 
    
    <li><a href="feedback.php">CONTACT</a></li>
    <li><a href="login_page.php">LOGIN</a></li>
    <li><a href="signup_page.php">REGISTER</a></li>
    
    
                           
  </ul>
</nav>

<div class="fa fa-bars"></div>


<div class="logo">
  <a href="#"><h1><span>GR</span>SU</h1></a>
</div>

  
</header>
<!-- header section end -->
               
                   
                   
                       
                           
                      
