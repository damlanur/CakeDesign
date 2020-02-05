
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname =  "cakedesign";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT PostID, PostName, PostText, PostImg, Tarih FROM posts";

$retval = mysqli_query($conn, $sql);
if(! $retval ) {
     die('Could not get data: ' . mysqli_error());
  }

echo "</div><div class='w3-row-padding w3-padding-16 w3-center' id='food'>";
  while($row = mysqli_fetch_array($retval)) {
     $path_pic = "http://localhost:8888/Design2/include/".$row[3];


     echo " <div class='w3-quarter'> ";
     echo "<b>User: </b>".$_SESSION['u_username']." <b>Date: </b>".substr("{$row[4]}",0,10)."<br>";
     echo "<b>{$row[1]}</b><br> ".
          "{$row[2]} <br> ".
          /*"EMP SALARY : {$row[2]} <br> ".*/
          "<img src='".$path_pic."' alt='icon' style='width:100%' ><br>";
     echo "  </div>";
     //echo "$row[0]";
     if (($row[0] % 4 ) == 0) {
       echo nl2br ("</div><div class='w3-row-padding w3-padding-16 w3-center' id='food'>");
     }
          //echo "<img src='".$row[2]."' />"."burayi biz yazdik";
          //echo "<img src='"/uploads/wsite1.png"' />";
  }

  /*echo "Fetched data successfully\n";*/

  mysqli_close($conn);

?>
