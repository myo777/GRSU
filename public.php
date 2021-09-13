<?php 

require_once 'template/header.php' 
?>
<!-- feature section starts -->

<section id="feature">
<?php include "dbConnection.php"; ?>

  <div class="post"></div>

  <h1>Public News</h1>
  
  <div class="card-container">
  <?php 
          $sql = "SELECT * FROM public ORDER BY id DESC";
          $res = mysqli_query($con,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($public = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="card">
             <img src="uploads/<?=$public['image_url']?>">
                <div class="content">
                <h1><?=$public['title']?></h1>
                <p><?=$public['content']?></p>
               
                <a href="#"><button>learn more</button></a>
                </div>
             </div>
          		
    <?php } }?>
  
  
  
  

 
  
  
  
  
  </div>
  
  </section>
  
  
  
  <!-- feature section ends -->



<?php require_once 'template/footer.php' ?>