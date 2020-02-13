
    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Admin Dashboard</span>
          </a>
        </li>

        <?php
        $sess = $_SESSION['admin_email'];
        if($sess == 'icare159@gmail.com'){
        echo"<li class='nav-item dropdown'>";
          echo"<a class='nav-link dropdown-toggle' href='#'' id='pagesDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
            echo"<i class='fas fa-user'></i> ";
            echo"<span>Account Setting</span>";
          echo"</a>";
          echo"<div class='dropdown-menu' aria-labelledby='pagesDropdown'>";
            echo"<h6 class='dropdown-header'>Account Screens:</h6>";
            echo"<a class='dropdown-item' href='addAccount.php'>Add Account</a>";
            echo"<a class='dropdown-item' href='viewAccount.php'>View and Edit Account</a>";
          echo"</div>";
        echo"</li>";
      }
        ?>

         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-image"></i>
            <span>Gallery</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Gallery Screens:</h6>
            <a class="dropdown-item" href="addGallery.php">Add Gallery</a>
            <a class="dropdown-item" href="viewGallery.php">View and Edit Gallery</a>
          </div>
        </li>

         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-rss"></i>
            <span>Blog</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">News Screens:</h6>
            <a class="dropdown-item" href="addBlog.php">Add News</a>
            <a class="dropdown-item" href="viewBlog.php">View and Edit News</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope-open-text"></i>
            <span>Message</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Message Screens:</h6>
            <a class="dropdown-item" href="viewContact.php">View Message</a>
          </div>
        </li>
      </ul>

      <div id="content-wrapper">