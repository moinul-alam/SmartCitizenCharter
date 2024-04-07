<?php

include "required/session.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $grs_intro = $_POST['grs_intro'];
    $gro_address = $_POST['gro_address'];
    $gro_deadline = $_POST['gro_deadline'];
    $alt_gro_address = $_POST['alt_gro_address'];
    $alt_gro_deadline = $_POST['alt_gro_deadline'];
    $ao_address = $_POST['ao_address'];
    $ao_deadline = $_POST['ao_deadline'];
    $cabinet_address = $_POST['cabinet_address'];
    $cabinet_deadline = $_POST['cabinet_deadline'];

    $sql_grs = "INSERT INTO grs (grs_intro, gro_address, gro_deadline, alt_gro_address, alt_gro_deadline, ao_address, ao_deadline, cabinet_address, cabinet_deadline) VALUES ('$grs_intro', '$gro_address', '$gro_deadline', '$alt_gro_address', '$alt_gro_deadline', '$ao_address', '$ao_deadline', '$cabinet_address', '$cabinet_deadline')";

    if(mysqli_query($conn, $sql_grs)) {
      header("Location: composition_success.php");
      exit();
    } else {
      echo '<script>alert("তথ্য সংরক্ষণ করা হয়নি, পূনরায় চেষ্টা করুন।");</script>';
    }
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
        <p class="alert alert-success fw-bold text-center">৩. অভিযোগ প্রতিকার ব্যবস্থাপনা</p>
      </section>
      <section class="page-content">
        <form action="" method="POST" class="p-3 rounded alert alert-info">
          <div class="row g-3 my-3">
            <div class="col-sm text-center">
              <input type="text" class="form-control fs-5" name="grs_intro"
                value="সেবা প্রাপ্তিতে অসন্তুষ্ট হলে দায়িত্বপ্রাপ্ত কর্মকর্তার সঙ্গে যোগাযোগ করুন। তিনি সমাধান দিতে ব্যর্থ হলে নিম্নোক্ত পদ্ধতিতে যোগাযোগ করে আপনার সমস্যা অবহিত করুন।">
            </div>
          </div>

          <table class="table table-striped-columns">
            <thead class="fs-5 text-center align-middle">
              <tr>
                <th class="col-1">ক্রমিক নং</th>
                <th class="col-3">কখন যোগাযোগ করবেন</th>
                <th class="col-2">কার সঙ্গে যোগাযোগ করবেন</th>
                <th class="col-3">যোগাযোগের ঠিকানা</th>
                <th class="col-2">নিষ্পত্তির সময়সীমা</th>
              </tr>
            </thead>
            <tbody class="fs-5">
              <tr class="table-secondary">
                <td class="text-center">১.</td>
                <td>দায়িত্বপ্রাপ্ত কর্মকর্তা সমাধান দিতে না পারলে</td>
                <td>অভিযোগ নিষ্পত্তি কর্মকর্তা (অনিক)</td>
                <td><textarea class="form-control" name="gro_address" required></textarea></td>
                <td><textarea class="form-control" name="gro_deadline" value="৩০ কর্মদিবস" required></textarea>
              </tr>
              <tr class="table-success">
                <td class="text-center">২.</td>
                <td>দায়িত্বপ্রাপ্ত কর্মকর্তা সমাধান দিতে না পারলে</td>
                <td>অভিযোগ নিষ্পত্তি বিকল্প কর্মকর্তা (অনিক)</td>
                <td><textarea class="form-control" name="alt_gro_address" required></textarea></td>
                <td><textarea class="form-control" name="alt_gro_deadline" value="৩০ কর্মদিবস" required></textarea>
              </tr>
              <tr class="table-warning">
                <td class="text-center">৩.</td>
                <td>অভিযোগ নিষ্পত্তি কর্মকর্তা নির্দিষ্ট সময়ে সমাধান দিতে না পারলে</td>
                <td>আপিল কর্মকর্তা</td>
                <td><textarea class="form-control" name="ao_address" required></textarea></td>
                <td><textarea class="form-control" name="ao_deadline" value="৩০ কর্মদিবস" required></textarea>
              </tr>
              <tr class="table-danger">
                <td class="text-center">৪.</td>
                <td>আপিল কর্মকর্তা নির্দিষ্ট সময়ে সমাধান দিতে না পারলে</td>
                <td>মন্ত্রিপরিষদ বিভাগের অভিযোগ ব্যবস্থাপনা সেল</td>
                <td><textarea class="form-control" name="cabinet_address" required></textarea></td>
                <td><textarea class="form-control" name="cabinet_deadline" value="৩০ কর্মদিবস" required></textarea>
              </tr>
            </tbody>
          </table>

          <div class="row g-3 my-3">
            <div class="col-sm text-center">
              <input type="submit" class="btn btn-primary fs-5" name="submit" value="সংরক্ষণ করুন">
            </div>
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
</body>

</html>