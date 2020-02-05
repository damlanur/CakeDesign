<!---->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">My Bakery</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">About</a> <!-- Yazi / No Login -->
      <a href="#designs" class="w3-bar-item w3-button">Designs</a> <!-- Blog / Login / Database -->
      <a href="#photo_gallery" class="w3-bar-item w3-button">Photo Gallery</a> <!-- Pictures / No Login / Database(optional) / connect to admin's pc -->
      <a href="#contact" class="w3-bar-item w3-button">Contact</a> <!-- No Login / Database / Only Admin Can Check -->
      <a href="#login" class="w3-bar-item w3-button"><?php include_once(__DIR__.'/login_info.php')  ?></a>
      <a href="http://localhost:8888/Design2/include/login-register_info.php" class="w3-bar-item w3-button">Register</a> <!-- Database / Add Admin Login to inside -->
    </div>
  </div>
</div>
