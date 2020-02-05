<html>
<body>

<?php

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
$sql = "INSERT INTO contacts (name_, email, message) VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["message"]."')";
$do = mysqli_query($conn,$sql);
echo "<script>
          alert('Thank you for your message!');
    </script>";
mysqli_close($conn);
?>

<a href="http://localhost:8888/Design2/index-members.php" class="w3-bar-item w3-button">Go Back to Home Page</a>

</body>
</html>
