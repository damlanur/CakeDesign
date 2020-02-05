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



if (isset($_POST['login'])) {
echo "string";
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    if(empty($_POST['username']) || empty($_POST['password'])) {
        header("Location: http://localhost:8888/Design2/inc/login.php?login=empty");
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE username='$username'";

        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            header("Location: http://localhost:8888/Design2/inc/login.php?login=error1");
            exit();
        }
        else {
          echo "string";

            if ($row = mysqli_fetch_assoc($result)) {
                $hashedPwdCheck = password_verify($password, $row['password_']);

                if ($hashedPwdCheck == false) {
                    header("Location: http://localhost:8888/Design2/inc/login.php?login=error2");
                    exit();
                }
                elseif ($hashedPwdCheck == true) {
                    $_SESSION['u_ID'] = $row['ID'];
                    $_SESSION['u_username'] = $row['username'];
                    $_SESSION['u_email'] = $row['email'];
                    $_SESSION['u_password'] = $row['password'];
                    header("Location: http://localhost:8888/Design2/index-members.php");
                    exit();
                }
            }
        }
    }
}
else {
    header("Location:http://localhost:8888/Design2/inc/login.php?login=error");
    exit();
}
