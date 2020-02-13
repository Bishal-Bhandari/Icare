<?php
$phptitle="Blog";
?>
<?php 
include('include/head.php');
include('include/navbar.php');
?>
<!-- full product detail -->
<?php
                echo"<section class='bg-light page-section' id='fulldetail'>";
                    echo"<div class='container'>";
                        echo"<div class='row'>";
                            echo"<div class='col-lg-12 text-center'>";
                                echo"<h2 class='section-heading text-uppercase'>Full News</h2>";
                            echo"</div>";
                        echo"</div>";

                include('admin/dbcon.php');


                                $getid=$_GET['fuldetail_ref'];
                                $query = "SELECT *FROM blog_post where blog_id='$getid'";
                                // $query = "SELECT *FROM blog_post ORDER BY blog_id DESC";
                                $result = mysqli_query($con, $query);
                                $row_cnt = mysqli_num_rows($result);
                                for ($i=0; $i <$row_cnt ; $i++) { 
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                 
                                $id=$row['blog_id'];
								$img=$row['blog_img'];
								$title=$row['title'];
                                $long=$row['blog_long_des'];

                                echo"<div class'row'>";
                                echo"<div class='col-12 col-detatil'>";
                                echo"<figure class='product-full-detail-wrapper'>";
                                echo"<img src='img/product_img/$img' alt='Product image' width='100%'>";
                                echo"</figure>";
                                echo"</div>";
                                echo"</div>";
                                echo"<div class='row'>";
								echo"<div class='col-12' style='overflow-wrap: break-word'>";
								echo"<p class='blog-title'>$title</p>";
                    echo"<p class='bg-white border border-0 rounded my-2'>$long</p>";
                    echo"</div>";
                    echo"</div>";
                                }
          echo"</div>";
        echo"</section>";

	//  <!-- Portfolio Grid -->
	echo"<section class='bg-light page-section' id='portfolio'>";
		echo"<div class='container'>";
			echo"<div class='row'>";
				echo"<div class='col-lg-12 text-center'>";
					echo"<h3 class='section-subheading text-muted'>Other News.</h3>";
				echo"</div>";
			echo"</div>";
			echo"<div class='row'>";
	include('admin/dbcon.php');



									$query = "SELECT *FROM blog_post ORDER BY blog_id DESC";
									$result = mysqli_query($con, $query);
									$row_cnt = mysqli_num_rows($result);
									for ($i=0; $i <3 ; $i++) { 
									$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
									
									$id=$row['blog_id'];
									$img=$row['blog_img'];
									$title=$row['title'];
									$title = substr($title, 0, 30);

									
									echo"<div class='col-md-4 col-sm-6 portfolio-item'>";
										echo"<a class='portfolio-link' href='fulldetails.php?fuldetail_ref=$id'>";
											echo"<div class='portfolio-hover'>";
											echo"<div class='portfolio-hover-content'>";
													echo"<i class='fas fa-plus fa-3x'></i>";
												echo"</div>";
											echo"</div>";
											echo"<img class='img-fluid' src='img/product_img/$img' alt='Product Image'>";
										echo"</a>";
										echo"<div class='portfolio-caption' style='overflow:hidden'>";
										echo"<p>$title</p>";
										echo"</div>";
										echo"</div>";
										
									}
									echo"</div>";
			echo"</div>";
			echo"</section>";



?>


  <!-- footer -->
<?php 
include('include/footer.php');
 ?>