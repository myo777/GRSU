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

<?php
include_once 'dbConnection.php';
?>
<body>
<!-- header section start -->

<header>
<nav>
  <ul>
    <li <?php if(@$_GET['q']==1) echo'class="active"'; ?> ><a href="account.php?q=1">Home<span class="sr-only">(current)</span></a></li>
    <li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="account.php?q=2">Public News</a></li>
    <li <?php if(@$_GET['q']==3) echo'class="active"'; ?>><a href="account.php?q=3">Events</a></li>
    

    
    <div class="dropdown">
      <button class="dropbtn">POST 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="account.php?q=4">POST PUBLIC NEWS</a>
      </div>
    </div> 
    
  

    <?php
      include_once 'dbConnection.php';
      session_start();
        if(!(isset($_SESSION['email']))){
      header("location:index.php");

      }
      else
      {
      $name = $_SESSION['name'];
      $email=$_SESSION['email'];

      include_once 'dbConnection.php';
      echo '<li><a><span style="margin-right:10px;">Hello</span>'.$name.'</a></li>
            <li><a href="logout.php?q=account.php">Signout</a></li>';
      }?>
    </ul>
</nav>

<div class="fa fa-bars"></div>
<div class="logo">
  <a href="#"><h1><span>GR</span>SU</h1></a>
</div>

  
</header>
<!-- header section end -->


<!-- Latest News section Start -->
<section id="feature">
<div class="card-container">
<?php if(@$_GET['q']==1) {

$result = mysqli_query($con,"SELECT * FROM images ORDER BY id DESC") or die('Error');
echo '<h1 style="margin-top:80px;">Latest News</h1>';
$c=1;
while($row = mysqli_fetch_array($result)) {

  
	$image_url = $row['image_url'];
	$content = $row['content'];
	$category = $row['category'];
  $title = $row['title'];
	$gogle = $row['gogle'];

	echo '<div class="card">
          
          <img src="uploads/'.$image_url.'" />
          <div class="content">
          
            <h1>'.$category.'</h1>
            <p>'.$title.'</p>
            <p>'.$gogle.'</p>
            <p>'.$content.'</p>
	      </div></div>';
}
$c=0;


}?>
</div>

<!--Latest News end-->

<!-- Public News section Start -->


<div class="card-container">
<?php if(@$_GET['q']==2) {

$result = mysqli_query($con,"SELECT * FROM public ORDER BY id DESC") or die('Error');
echo '<h1 style="margin-top:50px;">Public News</h1>';
$c=1;
while($row = mysqli_fetch_array($result)) {

  
	$image_url = $row['image_url'];
	$content = $row['content'];
	$title = $row['title'];
	

	echo '<div class="card">
          
          <img src="uploads/'.$image_url.'" />
          <div class="content">
          
            
            <h1>'.$title.'</h1>
            <p>'.$content.'</p>
	      </div></div>';
}
$c=0;


}?>
</div>

<!--Public News end-->

<!-- Public News section Start -->


<div class="card-container">
<?php if(@$_GET['q']==3) {

$result = mysqli_query($con,"SELECT * FROM events ORDER BY id DESC") or die('Error');
echo '<h1>Events</h1>';
$c=1;
while($row = mysqli_fetch_array($result)) {

  
	$image_url = $row['image_url'];
	$content = $row['content'];
	$title = $row['title'];
  $dates = $row['dates'];
  $locations = $row['locations'];
  

	

	echo '<div class="card">
          
          <img src="uploads/'.$image_url.'" />
          <div class="content">
            <h1>'.$title.'</h1>
            <p>'.$dates.'</p>
            <p>'.$locations.'</p>
            <p>'.$content.'</p>
	        </div>
        </div>';
}
$c=0;
echo '</div>';

}?>
</div>
<!--Public News end-->




<?php if(@$_GET['q']==4) {
echo '
<section id="contact">

      <form action="upload_public.php"
           method="post"
           enctype="multipart/form-data">
        <h1>Create Public news Form</h1>
        <input  type="text" name="title" placeholder="Title">
        <textarea placeholder="Content" name="content" cols="30" rows="10"></textarea>
        <input type="file" name="my_image">
        <input type="submit" name="submit" value="Upload">
      </form>
  
    <div class="content">
      <h1>မှတ်ချက်</h1>
      <ol>
        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a orci vestibulum, sodales turpis vel, bibendum augue. Sed luctus fringilla dolor,</li>
        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a orci vestibulum, sodales turpis vel, bibendum augue. Sed luctus fringilla dolor,</li>
        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a orci vestibulum, sodales turpis vel, bibendum augue. Sed luctus fringilla dolor,</li>
        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a orci vestibulum, sodales turpis vel, bibendum augue. Sed luctus fringilla dolor,</li>
      </ol>
    </div>
    </section>
   ';
}?>
</section>

<?php
    require 'template/footer.php';
?>