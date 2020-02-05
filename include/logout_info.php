<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 0px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #FF0000;
    color: white;
  /*  padding: 14px 20px;*/
  /*  margin: 8px 0;*/
    border: none;
    cursor: pointer;
  /*  width: 100%;*/
}

button:hover {
    opacity: 1;
}

/* Center the image and position the close button */


.container {
    padding: 16px;
}


/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    /* padding-top: 60px; */
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}


</style>
</head>
<body>



<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Log out</button>

<!--First Modal For Sign-In | Let you go to index-member.php | action should be the checker_for_password.php, if everything is correct then index-member.php-->
<div id="id03" class="modal">
  <div class="container">
    <form class="modal-content animate" action="http://localhost:8888/Design2/inc/logout.php" method="post">
      <p>Do you want to log out?</p>
      <button type="button" onclick="document.getElementById('id03').style.display='none'">Cancel</button>
      <button type="submit" name="logout">Logout</button>
    </form>
  </div>
</div>
<!--Second Modal for Forgotten Password-->


<script>
// Get the modal
var modal = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
