<?php

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);

  if($count ==1){
    header("Location: contents/home.php");
    exit();
  }
  else{
    echo '<script>
        var popupMessageElement = document.getElementById("popupMessage");
        popupMessageElement.innerHTML = "ERROR!!!!!";
        var popupModal = new bootstrap.Modal(document.getElementById("popupModal"));
        popupModal.show();
        console.log("show modal");
        window.location.href = "index.php";
    </script>';
  }
}

?>