<?php 
require_once 'template/header.php' 
?>

  
<!-- contact us section starts -->

<section id="contact">
  

    <form action="upload_public.php"
           method="post"
           enctype="multipart/form-data">
        <h1>Create Public news Form</h1>
        <?php if (isset($_GET['error'])): ?>
		    <p style="color:white;"><?php echo $_GET['error']; ?></p>
	      <?php endif ?>
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
<!-- contact us section ends -->
    

<?php require_once 'template/footer.php' ?>