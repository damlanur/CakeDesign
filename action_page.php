<html>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "1234qwer";
$dbname = "cakedesign";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
 }

$sql="INSERT INTO orders (name_, n_of_ppl, tarih, message) VALUES ('".$_POST["name1"]."','".$_POST["n_of_ppl1"]."','".$_POST["tarih1"]."','".$_POST["message1"]."')";
$do = mysqli_query($con,$sql);

mysql_close($con)
?>
</body>
</html>
