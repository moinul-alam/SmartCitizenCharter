<?php

include "required/session.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $expectations = $_POST['expectation'];

  foreach($expectations as $expectation){
    $sql_expectations = "INSERT INTO expectations (expectation) VALUES ('$expectation')";
    if(!mysqli_query($conn, $sql_expectations)) {
      echo '<script>alert("তথ্য সংরক্ষণ করা হয়নি, পূনরায় চেষ্টা করুন।");</script>';
    }
  }
  header("Location: composition_success.php");
  exit();
} 

?>

<!DOCTYPE html>
<html lang="bn">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>সিটিজেন্‌স চার্টার - অভ্যন্তরীণ সম্পদ বিভাগ, অর্থ মন্ত্রণালয়</title>
  <link rel="icon" href="/images/govlogo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../resources/css/style.css">
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
        <p class="alert alert-success fw-bold text-center">৪. আপনার কছে আমাদের প্রত্যাশা</p>
      </section>
      <section class="page-content">
        <form action="" method="POST" class="p-3 rounded alert alert-info">
          <table class="table table-striped-columns" id="expectionTable">
            <thead class="fs-5 text-center align-middle">
              <tr class="table-secondary">
                <th class="col-1">ক্রমিক নং</th>
                <th class="col-11">প্রতিশ্রুত/কাঙ্খিত সেবা প্রাপ্তির লক্ষ্যে করণীয়</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center align-middle">১.</td>
                <td><input type="text" class="form-control" name="expectation[]"
                    value="নির্ধারিত ফরমে সম্পূর্ণভাবে পূরণকৃত আবেদন জমা প্রদান।" required></td>
              </tr>
              <tr>
                <td class="text-center align-middle">২.</td>
                <td><input type="text" class="form-control" name="expectation[]"
                    value="আবেদনের সাথে প্রয়োজনীয় কাগজপত্রাদি প্রদান।" required></td>
              </tr>
              <tr>
                <td class="text-center align-middle">৩.</td>
                <td><input type="text" class="form-control" name="expectation[]"
                    value="সেবা প্রাপ্তির ক্ষেত্রে কোন অস্পষ্টতা থাকলে সেবা প্রদানকারী কর্মকর্তার নিকট থেকে পরামর্শ গ্রহণ করবেন।"
                    required></td>
              </tr>
            </tbody>
          </table>

          <div class="row g-3 my-3">
            <div class="col-sm text-center">
              <input type="submit" class="btn btn-primary fs-5" name="submit" value="সংরক্ষণ করুন">
            </div>
          </div>
        </form>


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
</body>

</html>