<?php
    require 'template/header.php';
?>

<!-- Signin section starts -->

<section id="admin">

    <form role="form" method="POST" action="login.php?q=index.php">
      <h1>Sign In</h1>
      <input type="text" name="email" placeholder="Enter your email-id">
      <input type="password" name="password" placeholder="Enter your Password">
      <div class="panel-footer" style="color: red; font-size:14px;">Don't have an account yet? <a href="signup_page.php" style="color:white; margin-left: 20px;">Register</a></div><br>
      <input type="submit" name="login" value="Login">
     
    </form>
  
</section>
<!-- contact us section ends -->

           



<?php
    require 'template/footer.php';
?>


 