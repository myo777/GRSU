<?php
    require 'template/header.php';
?>
<!-- contact us section starts -->

<section id="contact">
  

<div style="font-size:14px">





<form role="form"  method="post" action="feed.php?q=feedback.php">
<?php if(@$_GET['q'])echo '<span style="font-size:18px; color:white;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;'.@$_GET['q'].'</span>';
else
{echo' 
<h1>contact form</h1>
  <input id="name" name="name" placeholder="Enter your name"  input-md" type="text"><br />    
  <input id="name" name="subject" placeholder="Enter subject"  input-md" type="text">    
  <input id="email" name="email" placeholder="Enter your email-id" input-md" type="email">    
  <textarea rows="5" cols="8" name="feedback" placeholder="Write feedback here..."></textarea>
  <input type="submit" name="submit" value="Submit"/>

</form>

</div>
  <div class="image">
    <img src="image/get.jpeg" alt="get in touch">
  </div>

  ';}?>

</section>



<!-- contact us section ends -->

<?php
    require 'template/footer.php';
?>
