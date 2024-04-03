<?php

include "contents/required/authentication.php";
?>
<!DOCTYPE html>
<html lang="bn">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>সিটিজেন্‌স চার্টার - অভ্যন্তরীণ সম্পদ বিভাগ, অর্থ মন্ত্রণালয়</title>
  <link rel="icon" href="images/govlogo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="resources/css/style.css">
</head>

<body>
  <div class="container login-page">
    <section class="login-top text-center">
      <div class="office-logo">
        <img src="images/govlogo.png" alt="Government of Bangladesh Logo">
      </div>
      <div class="office-name mx-auto login-box-width bg-info rounded mt-3">
        <h2 class="text-black my-auto p-3 fw-bold">অভ্যন্তরীণ সম্পদ বিভাগ</h2>
      </div>
    </section>

    <main class="d-flex justify-content-center h-100">
      <div class="card login-box-width login-box-bg">
        <div class="app-name text-center">
          <h3 class="fw-bold p-3 bg-warning rounded">সিটিজেন্‌স চার্টার</h3>
        </div>
        <div class="card-header text-center">
          <h3 class="text-warning fw-bold">এডমিন লগিন</h3>
        </div>

        <div class="card-body">

          <!-- Login Form  -->
          <form action="" name="loginForm" class="login-form" method="post">
            <div class="input-group mb-3">
              <label class="input-group-text text-black border-0 bg-warning" for=""><i class="fas fa-user"></i></label>
              <input type="text" name="username" id="username" class="form-control" placeholder="ইউজার নেম"
                aria-describedby="username" required>
            </div>

            <div class="input-group mb-3">
              <label class="input-group-text text-black border-0 bg-warning" for=""><i class="fas fa-key"></i></label>
              <input type="password" name="password" id="password" class="form-control" placeholder="পাসওয়ার্ড"
                aria-describedby="password" required>
            </div>

            <div class="input-group show-password m-3">
              <input type="checkbox" onclick="togglePassword()" class="form-check-input" id="showPassword">
              <label class="p-1 text-white" for="showPassword">পাসওয়ার্ড দেখুন</label>
            </div>

            <div class="input-group text-center">
              <input type="submit" name="submit" class="btn btn-dark btn-outline-warning fw-bold text- mx-auto"
                value="লগিন করুন">
            </div>

          </form>

        </div>
      </div>
    </main>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
  <script src="resources/js/togglepassword.js"></script>
</body>

</html>