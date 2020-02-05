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



if (isset($_POST['create'])) {


    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    if(empty($_POST['username']) ||  empty($_POST['email']) || empty($_POST['password'])) {
        header("Location: http://localhost:8888/Design2/inc/login.php?register=empty");
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            header("Location: http://localhost:8888/Design2/inc/login.php?register=invalid");
            exit();
        }
        else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: http://localhost:8888/Design2/inc/login.php?register=invalid");
                exit();
            }
            else {
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (username, email, password_) VALUES ('$username', '$email', '$hashedPwd');";
                mysqli_query($conn, $sql);
                header("Location: http://localhost:8888/Design2/include/login_info.php");
                exit();
            }
        }
    }
}

else {
    echo "string";
    //header("Location: /inc/login.php");
    exit();
}
