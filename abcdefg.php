<?php
    require 'template/header.php';
?>
<!-- Admin Login section starts -->

<section id="admin">

    <form role="form" method="POST" action="admin.php?q=index.php">
      <h1>Admin Login</h1>
      <input type="text" name="uname" placeholder="Enter your email-id">
      <input type="password" name="password"maxlength="15" placeholder="Enter your Password">
      <input type="submit" name="login" value="Login">
      <div class="panel-footer">Don't have an account yet? <a href="signup_page.php">Register</a></div>
    </form>
  
</section>
<!-- Admin Login section ends -->
          
<?php
    require 'template/footer.php';
?>


                 
                  

                  
                  

                  
                  

 