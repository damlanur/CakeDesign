<?php

if (isset($_POST['logout'])) {
    session_start();
    session_unset();
    session_destroy();
    header("Location: http://localhost:8888/Design2/index-everyone.php");
    exit();
}
else {
    header("Location: http://localhost:8888/Design2/index-members.php");
    exit();

}
