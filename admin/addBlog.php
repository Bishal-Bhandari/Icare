<?php
include('includes/header.php');
include('includes/navbar_top.php');
include('includes/menu_bar_side.php');
?>
<div class="container">
  <h2>Add News</h2>
  <form action="upload_blog.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file"  placeholder="Choose Image" name="image" style="width: 100%; margin: 5px 0px; padding:2px 0px;">
    </div>
    <div class="form-group">
    	<label for="short">Blog Full Description:</label>
    <textarea  rows="5" id="comment" name="long" placeholder="News Full" required="required" style="width: 100%; margin: 5px 0px; padding:2px 0px;"></textarea>
    </div>
  <button type="submit" class="btn btn-primary btn-block btn-large" name="upload">Submit</button>
  </form>
</div>
<?php
include('includes/footer.php');
?>