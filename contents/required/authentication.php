<?php

session_start();
include "contents/required/dbconn.php";
if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  // Create a prepared statement
  $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
  $stmt = mysqli_prepare($conn, $sql);
  
  // Bind parameters to the prepared statement
  mysqli_stmt_bind_param($stmt, "ss", $username, $password);
  
  // Execute the prepared statement
  mysqli_stmt_execute($stmt);
  
  // Store the result
  $result = mysqli_stmt_get_result($stmt);
  
  // Check if there is a match
  if(mysqli_num_rows($result) == 1){
    $_SESSION['username'] = $username;
    header("Location: contents/home.php");
    exit();
  }
  else{
    echo '<script>
    alert("ইউজারনেম অথবা পাসওয়ার্ড ভুল, পূনরায় লগিন করুন");
    </script>';
    // header("Location: index.php");
  }
}

?>