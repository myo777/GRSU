<?php 

require_once 'template/header.php' 
?>
<!-- feature section starts -->

<section id="feature">
<?php include "dbConnection.php"; ?>

  <div class="post"></div>

  <h1>Latest news</h1>
  
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
  
  
  
  <!-- feature section ends -->



<?php require_once 'template/footer.php' ?>