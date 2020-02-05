<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: "Times New Roman", Georgia, Serif;
}

* {
    box-sizing: border-box;
}

.split {
    height: 100%;
    width: 100%;
    position: fixed;
    z-index: 1;
    top: 0;
    overflow-x: hidden;
    padding-top: 20px;
}

.left {
    left: 0;
    background-color: lightpink;
}

.right {
    right: 0;
    background-color: #AF7AC5;
}

.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}



/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}
textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}


/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
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

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
</head>



<body>

<div class="split right">
  <div class="centered">
    <div class="container">
      <form action="http://localhost:8888/Design2/include/blog_upload.php" method="post" enctype="multipart/form-data">
        <h3><b>Post Name</b></h3> <input class="w3-input w3-padding-16" type="text" name="name1" required/><br><br>
        <!-- Post Text: <input class="w3-input w3-padding-16" type="text" name="ptext" /><br><br> -->
        <h3><b>Post Text</b></h3> <textarea class="w3-input w3-padding-16" name="ptext" id="taid" rows="10" cols="35" required></textarea><br><br>
        <b>Date and Time:</b> <input class="w3-input w3-padding-16" type="datetime-local" name="tarih1" value="2017-11-16T16:00" /><br><br>
        <b>Select image to upload:</b> <input type="file" name="fileToUpload" id="fileToUpload">  <input type="submit" value="Upload Image" name="submit" class="registerbtn" required>
      </form>

    </div>
  </div>
</div>


</body>
</html>
