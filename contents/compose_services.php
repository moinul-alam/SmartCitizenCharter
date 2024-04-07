<?php

include "required/session.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $service_type = $_POST['service_type'];
    $service_name = $_POST['service_name'];
    $service_delivery = $_POST['service_delivery'];
    $documents_required = $_POST['documents_required'];
    $service_fee = $_POST['service_fee'];
    $service_deadline = $_POST['service_deadline'];
    $officer_incharge = $_POST['officer_incharge'];

    // Prepare the SQL statement with placeholders
    $sql_services = "INSERT INTO services (service_type, service_name, service_delivery, documents_required, service_fee, service_deadline, officer_incharge) VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Bind parameters to the statement
    $stmt = mysqli_prepare($conn, $sql_services);
    mysqli_stmt_bind_param($stmt, "sssssss", $service_type, $service_name, $service_delivery, $documents_required, $service_fee, $service_deadline, $officer_incharge);

    // Execute the statement
    if(mysqli_stmt_execute($stmt)) {
        header("Location: composition_success.php");
        exit();
    } else {
        echo '<script>alert("তথ্য সংরক্ষণ করা হয়নি, পূনরায় চেষ্টা করুন।");</script>';
    }

    // Close the statement
    mysqli_stmt_close($stmt);
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
        <p class="alert alert-success fw-bold text-center">২. প্রতিশ্রুতি ও সেবাসমূহ</p>
      </section>
      <section class="page-content">
        <form action="" method="POST" class="fs-5 p-3 rounded alert alert-info">
          <div class="row g-3 mb-5">
            <div class="col-sm text-center">
              <select class="bg-warning p-2 rounded" id="serviceType" name="service_type" required>
                <option value="">সেবার ধরণ নির্বাচন করুন</option>
                <option value="civil_service">নাগরিক সেবা</option>
                <option value="official_service">প্রাতিষ্ঠানিক সেবা</option>
                <option value="internal_service">অভ্যন্তরীণ সেবা</option>
              </select>
            </div>
          </div>

          <div class="row g-3">
            <div class="col-sm-3">
              <label for="serviceName" class="form-label mx-2 fw-bold">সেবার নাম</label>
              <textarea class="form-control" id="serviceName" name="service_name" placeholder="সেবার নাম লিখুন"
                rows="3"></textarea>
            </div>
            <div class="col-sm-4">
              <label for="serviceDelivery" class="form-label mx-2 fw-bold">সেবা প্রদান পদ্ধতি</label>
              <textarea class="form-control" id="serviceDelivery" name="service_delivery"
                placeholder="সেবা প্রদান পদ্ধতি বর্ণনা করুন" rows="3"></textarea>
            </div>
            <div class="col-sm-5">
              <label for="documentsRequired" class="form-label mx-2 fw-bold">প্রয়োজনীয় কাগজপত্র ও প্রাপ্তিস্থান</label>
              <textarea class="form-control" id="documentsRequired" name="documents_required"
                placeholder="প্রয়োজনীয় কাগজপত্রের বর্ণনা দিন" rows="3"></textarea>
            </div>
          </div>

          <div class="row g-3 my-3">
            <div class="col-sm-3">
              <label for="serviceFee" class="form-label mx-2 fw-bold">সেবার মূল্য ও পরিশোধ পদ্ধতি</label>
              <textarea class="form-control" id="serviceFee" name="service_fee" rows="3">বিনামূল্যে</textarea>
            </div>
            <div class="col-sm-4">
              <label for="serviceDeadline" class="form-label mx-2 fw-bold">সেবা প্রদানের সময়সীমা</label>
              <textarea class="form-control" id="serviceDeadline" name="service_deadline" rows="3"> কার্যদিবস</textarea>
            </div>
            <div class="col-sm-5">
              <label for="officerIncharge" class="form-label mx-2 fw-bold">দায়িত্বপ্রাপ্ত কর্মকর্তা</label>
              <textarea class="form-control" id="officerIncharge" name="officer_incharge"
                placeholder="দায়িত্বপ্রাপ্ত কর্মকর্তার নাম, পদবী, ফোন নম্বর ও ইমেইল লিখুন" rows="3"></textarea>
            </div>
          </div>

          <div class="row g-3 my-3">
            <div class="col-sm text-center">
              <input type="submit" class="btn btn-primary" name="submit" value="সংরক্ষণ করুন">
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