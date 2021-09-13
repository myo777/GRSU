<?php 

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "dbConnection.php";

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	
	
    $title = $_POST["title"];
    $content = $_POST["content"];
    $dates = $_POST["dates"];
    $locations = $_POST["locations"];
    
    
	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 1525000) {
			$em = "Sorry, your file is too large.";
		    header("Location: create_events.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png","PNG"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO events(image_url,title,content,dates,locations) 
				        VALUES('$new_img_name','$title','$content','$dates','$locations')";

				mysqli_query($con, $sql);
				header("Location: create_events.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: create_events.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: create_events.php?error=$em");
	}

}else {
	header("Location: create_events.php");
}