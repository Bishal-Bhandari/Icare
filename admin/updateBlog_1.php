<?php
session_start();
  // Create database connection
include('dbcon.php');

  // Initialize message variable
//   $msg = "";;

  // If upload button is clicked ...
  if (isset($_POST['update'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
      $id = mysqli_real_escape_string($con, $_POST['id']);
      $title = mysqli_real_escape_string($con, $_POST['title']);
      $long = mysqli_real_escape_string($con, $_POST['long']);
  	// image file directory
  	$target = "../img/product_img/".basename($image);

    $sql="UPDATE blog_post SET blog_img='$image', title='$title', blog_long_des='$long' WHERE blog_id=$id";
       
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