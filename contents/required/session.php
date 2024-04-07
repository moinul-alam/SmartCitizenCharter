<?php

session_start();
include "dbconn.php";
// Check if user is logged in
if (!isset($_SESSION['username'])) {
    echo '<script>alert("লগিন করুন");</script>';
    header("Location: ../index.php");
    exit;
}

$username = $_SESSION['username'];

// Retrieve user details (optional if not needed elsewhere)
$sql_user_info = "SELECT first_name, last_name FROM users WHERE username = '$username'";
$user_info = mysqli_query($conn, $sql_user_info);

if(mysqli_num_rows($user_info) > 0){
  $rows_user_info = mysqli_fetch_assoc($user_info);

  $first_name = $rows_user_info["first_name"];
  $last_name = $rows_user_info["last_name"];
}

//Logout logic
if (isset($_GET['logout'])) {
  $_SESSION = array();
  session_destroy();
  header("Location: ../index.php");
  exit;
}

?>