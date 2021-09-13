<?php 

require_once 'template/header.php' 
?>
<!-- feature section starts -->

<section id="feature">
<?php include "dbConnection.php"; ?>

  <div class="post"></div>

  <h1>Our Next Events</h1>
  
  <div class="card-container">
  <?php 
          $sql = "SELECT * FROM events ORDER BY id DESC";
          $res = mysqli_query($con,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($events = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="card">
             <img src="uploads/<?=$events['image_url']?>">
                <div class="content">
                <h1><?=$events['title']?></h1>
                
                  <p><?=$events['dates']?></p>
                  <p><?=$events['locations']?></p>
                  <p><?=$events['content']?></p>
               
                <a href="#"><button>learn more</button></a>
                </div>
             </div>
          		
    <?php } }?>
  
  
  
  

 
  
  
  
  
  </div>
  
  </section>
  
  
  
  <!-- feature section ends -->



<?php require_once 'template/footer.php' ?>