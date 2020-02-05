<!DOCTYPE html>

<html>
<style>
.registerbtn {
    background-color: #7FB3D5;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

</style>
<!--<div class="w3-row-padding w3-padding-16 w3-center" id="food">
  <div class="w3-quarter">
    <img src="img/cake1.jpg" alt="Sandwich" style="width:100%">
    <h3>The Perfect Sandwich, A Real NYC Classic</h3>
    <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
  </div>
  <div class="w3-quarter">
    <img src="img/cake2.jpg" alt="Steak" style="width:100%">
    <h3>Let Me Tell You About This Steak</h3>
    <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
  </div>
  <div class="w3-quarter">
    <img src="img/cake3.jpg" alt="Cherries" style="width:100%">
    <h3>Cherries, interrupted</h3>
    <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    <p>What else?</p>
  </div>
  <div class="w3-quarter">
    <img src="img/cake4.jpg" alt="Pasta and Wine" style="width:100%">
    <h3>Once Again, Robust Wine and Vegetable Pasta</h3>
    <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
  </div>
</div> -->
<body>

<div class="w3-row-padding w3-padding-16 w3-center" id="food">

    <?php include_once(__DIR__.'/blog.php') ?>

</div>
<div class="w3-center w3-padding-32">
  <div class="w3-bar">
    <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
    <a href="#" class="w3-bar-item w3-black w3-button">1</a>
    <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
    <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
    <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
    <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
  </div>
</div>
<form action="http://localhost:8888/Design2/include/post_info.php">
    <button type="submit" name="create" class="registerbtn">New Post</button>
</form>
</body>
</html>
