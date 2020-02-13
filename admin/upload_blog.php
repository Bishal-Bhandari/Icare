<?php
session_start();
  // Create database connection
include('dbcon.php');


  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
      $title = mysqli_real_escape_string($con, $_POST['title']);
      $long = mysqli_real_escape_string($con, $_POST['long']);

  	// image file directory
  	$target = "../img/product_img/".basename($image);

  	$sql = "INSERT INTO blog_post (blog_img,title,blog_long_des) 
      VALUES ('$image', '$title', '$long')";
  	// execute query
  	mysqli_query($con, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  header('location:viewBlog.php');
?>