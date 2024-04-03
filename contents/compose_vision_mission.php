<?php

require "required/session.php";
?>

<!DOCTYPE html>
<html lang="bn">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>স্মার্ট সিটিজেন্‌স চার্টার - অভ্যন্তরীণ সম্পদ বিভাগ, অর্থ মন্ত্রণালয়</title>
  <link rel="icon" href="/images/govlogo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../resources/css/style.css">
  <script src="../resources/js/includeComponent.js"></script>
</head>

<body>
  <div class="container-fluid d-flex flex-column">
    <!-- Header Area -->
    <?php
      include 'header.php';
      include 'navbar.php';
    ?>

    <!-- Main Content Area -->
    <main class="main-content px-4 login-box-bg">
      <section class="page-intro fs-4">
        <p class="alert alert-success fw-bold text-center">১. সিটিজেন্‌স চার্টারের ভিশন ও মিশন প্রণয়ন</p>
      </section>
      <section class="page-content">
        <form action="composition_success.php" method="POST" class="bg-light p-2 rounded">
          <div class="form-group m-2">
            <label for="vision_statement" class="fs-5 p-2">ভিশন</label>
            <textarea name="vision_statement" class="form-control" id="visionStatement" placeholder="ভিশন লিখুন"
              rows="3"></textarea>
          </div>

          <div class="form-group m-2">
            <label for="mission_statement" class="fs-5 p-2">মিশন</label>
            <textarea name="mission_statement" class="form-control" id="missionStatement" placeholder="মিশন লিখুন"
              rows="3"></textarea>
          </div>

          <div class="form-group text-center">
            <input type="submit" class="btn btn-primary" value="সংরক্ষণ করুন">
          </div>
        </form>
      </section>


    </main>
    <!-- Footer Area -->
    <?php
    include 'footer.php';
    ?>
  </div>
  <!-- External Javascipts Sources -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
  <script src="https://cdn.lordicon.com/lordicon.js"></script>
  <script src="../resources/js/addrow.js"></script>
  <!-- <script>addRow(7);</script> -->
</body>

</html>