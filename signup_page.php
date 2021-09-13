
            <?php
                require 'template/header.php';
            ?>
           
           <section id="admin" style="height:auto;">
           
                        <form name="form" method="post" action="sign.php" onSubmit="return validateForm()" method="POST">
                        <h1>Register</h1>
                            <div class="form-group">
                                
                                <input id="name" name="name" placeholder="Enter your name" type="text">
                            </div>

                            
                                <select id="gender" name="gender" placeholder="Enter your gender" >
                                <option value="Male">Select Gender</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option> </select>
                          

                                      <!-- Text input-->
                            <div class="form-group">
                              <input id="college" name="college" placeholder="Enter your college or University name" type="text">
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                              <input id="email" name="email" placeholder="Enter your email-id" type="email">
                            </div>

                                    <!-- Text input-->
                            <div class="form-group">
                              <input id="mob" name="mob" placeholder="Enter your mobile number"  type="number">
                            </div>


                            <!-- Text input-->
                            <div class="form-group">
                              <input id="password" name="password" placeholder="Enter your password" type="password">
                            </div>

                            <div class="form-group">
                              <input id="cpassword" name="cpassword" placeholder="Conform Password" type="password">
                            </div>
                               <?php if(@$_GET['q7'])
                               { echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
                            
                            <!-- Button -->
                            <div class="panel-footer" style="color: red; font-size:14px;">Already Register? <a href="login_page.php" style="color:white; margin-left: 20px;">Login</a></div><br>
                            <div class="form-group" style="margin-bottom: 50px;">
                              <input  type="submit" class="sub" value="sign up"/>
                            </div>
                          
                            
                        </form>
</section>  

<?php
    require 'template/footer.php';
?>

   




      
      
      
                  
                  

                  
                  

                  
                  

 