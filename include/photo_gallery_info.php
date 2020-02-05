<!DOCTYPE html>
<html>
<head>
<style>
body {margin:25px;}

div.polaroid {
  width: 80%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

div.container {

  text-align: center;
  padding: 10px 20px;
}
.flex-container {
  display: flex;
  flex-direction: row;

}
.flex-container > div {
   margin: 10px;

}
</style>
</head>
<body>
  <h1 class="w3-center">Photo Gallery</h1><br>
<div class=" flex-container">

<div class="polaroid">
  <img src="images/cake1.jpg" alt="Norway" style="width:100%" >
  <div class="container">
    <p>Chocolate Cake</p>
  </div>
</div>
<div class="polaroid">
  <img src="images/cake2.jpg" alt="Norway" style="width:100%" >
  <div class="container">
    <p>Surprize Cake</p>
  </div>
</div>
</div>
<div class=" flex-container">

<div class="polaroid">
  <img src="images/cake3.jpg" alt="Norway" style="width:100%" >
  <div class="container">
    <p>Strawberry Cake</p>
  </div>
</div>
<div class="polaroid">
  <img src="images/cake4.jpg" alt="Norway" style="width:100%" >
  <div class="container">
    <p>Vanilla Naked Cake</p>
  </div>
</div>
</div>
<div class=" flex-container">

<div class="polaroid">
  <img src="images/cake5.jpg" alt="Norway" style="width:100%" >
  <div class="container">
    <p>Wedding Cake</p>
  </div>
</div>
<div class="polaroid">
  <img src="images/cake7.jpg" alt="Norway" style="width:100%" >
  <div class="container">
    <p>Wedding Cake</p>
  </div>
</div>
</div>
</body>
</html>
