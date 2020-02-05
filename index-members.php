<!-- Add Session -->
<?php   session_start();  ?>

<!DOCTYPE html>

<html>
<title>MyBakery</title>
<?php
      if(!isset($_SESSION['u_username'])) // If session is not set then redirect to Login Page
       {
           header("Location: include/login-register_info.php");
       }

          echo $_SESSION['u_username'];

          echo "Login Success";

          //echo "<a href='inc/logout.php'> Logout</a> ";
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1,h2,h3,h4,h5,h6 {
    font-family: "Playfair Display";
    letter-spacing: 5px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
  <?php include_once(__DIR__.'/include/navbar_info_m.php') ?>



<!-- Header -->
<?php include_once(__DIR__.'/include/header_info.php') ?>


<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- ABOUT SECTION -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
       <img src="images/cake7.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>
    <div class="w3-col m6 w3-padding-large">

      <?php include_once(__DIR__.'/include/about_info.php') ?>

    </div>
  </div>

  <hr>

  <!-- DESIGNS SECTION -->
  <div class="w3-row w3-padding-64" id="designs">
    <div class="w3-col l6 w3-padding-large">
        <?php include_once(__DIR__.'/include/designs_info.php') ?>
    </div>

    <div class="w3-col l6 w3-padding-large">
      <img src="images/cake8.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
  </div>

  <hr>

  <div class="w3-row w3-padding-64" id="photo_gallery">
    <div class="w3-col 64 w3-padding-large">
      <?php include_once(__DIR__.'/include/photo_gallery_info.php')  ?>
  </div>

  </div>


  <hr>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="contact">
      <?php include_once(__DIR__.'/include/contact_info.php')  ?>

  </div>
  <hr>

  <!-- Post Section -->
  <div class="w3-container w3-padding-64" id="post">
      <?php include_once(__DIR__.'/include/blog_info.php')  ?>

  </div>









<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-pink w3-padding-32">
 <p>Hello from footer! :)<p>

</footer>

</body>
</html>
