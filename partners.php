<?php
    require 'template/header.php';
?>

<!-- Partners sectin starts -->

<section id="about">
<?php include "dbConnection.php"; ?>

    <h3>Partners</h3>
    
    <a href="index.php"><button>Home</button></a>
    <div class="icons">
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-github"></a>
      <a href="#" class="fa fa-pinterest"></a>
    </div>

    
</section>
<section id="feature">
<?php include "dbConnection.php"; ?>

  <div class="post"></div>

  <h3>ESU is a collaborative organisation working with a wide variety of governmental and non-governmental organisations in Europe and beyond. On this page, you will find information and links to the main partners of ESU.</h3>
  
  <div class="card-container">
  <?php 
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($con,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="card">
             <img src="uploads/<?=$images['image_url']?>">
                <div class="content">
                <h1><?=$images['category']?></h1>
                
                  <p><?=$images['title']?></p>
                  <p><?=$images['gogle']?></p>
               
                <a href="#"><button>learn more</button></a>
                </div>
             </div>
          		
    <?php } }?>
  </div>
  
  </section>
  

<!-- Partners sectin ends -->
<?php
    require 'template/footer.php';
?>