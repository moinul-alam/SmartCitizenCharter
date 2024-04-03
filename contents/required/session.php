<?php

include "dbconn.php";
session_start();

if (!isset($_SESSION['username'])) {

  echo '<script>alert("লগিন করুন");</script>';
  header("Location: ../index.php");
  exit; 
}
  $username = $_SESSION['username'];

  $sql = "SELECT first_name, last_name FROM users WHERE username = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s",$username);
  $stmt->execute();
  $result = $stmt->get_result();

  if($result->num_rows >0) {
    while($row = $result->fetch_assoc()){
      $first_name = $row["first_name"];
      $last_name = $row["last_name"];
    }
  }

  $stmt->close();
  $conn->close();
?>