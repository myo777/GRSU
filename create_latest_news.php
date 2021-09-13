<?php 
require_once 'template/header.php' 
?>

  
<!-- contact us section starts -->

<section id="contact">
<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>

    <form action="upload_news.php"
           method="post"
           enctype="multipart/form-data">
      <h1>Latest news Form</h1>
      <select name="category">
                   <option>ALL</option>
                   <option value="PHP">PHP</option>
                   <option value="Python">Python</option>
                   <option value="Javascript">Javascript</option>
                   <option value="React">React</option>
                   <option value="Data_Analyst">Data_Analyst</option>
                   <option value="CSS">CSS</option>
            </select><br>
      <input  type="text" name="title">
      <input  type="text" name="gogle">
      <textarea placeholder="message" cols="30" rows="10"></textarea>
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