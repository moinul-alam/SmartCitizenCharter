<?php
include "required/dbconn.php";

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
</head>

<body>
  <div class="container-fluid d-flex flex-column login-box-bg">
    <!-- Header Area -->
    <?php
    include 'header.php';
    ?>

    <!-- Main Content Area -->
    <main class="main-content">
      <section class="page-intro alert alert-info m-0 pb-0 text-center ">
        <div class="fs-5">
          <p class="fw-bold">১. ভিশন ও মিশন</p>
          <div class="ms-4  text-black">
            <?php
            $sql_vision = "SELECT vision, mission FROM vision_mission";
            $result_vision = mysqli_query($conn, $sql_vision);

            while($row = mysqli_fetch_assoc($result_vision)){
              echo '<p class="mb-1">ভিশনঃ ' . $row['vision'] . '</p>';
              echo '<p class="mb-1">মিশনঃ ' . $row['mission'] . '</p>';
            }
            ?>

            <!-- <p class="mb-1">ভিশনঃ </p>
            <p class="mb-1">মিশনঃ </p> -->
          </div>
        </div>
      </section>

      <section class="page-content fs-5 text-black text-center">
        <div class="vision-mission alert alert-info m-0">
          <p class="fw-bold">২. প্রতিশ্রুতি ও সেবা</p>
          <p>আপনার কাঙ্খিত সেবা সংক্রান্ত তথ্য জানতে নিচের মেনু থেকে নির্বাচন করুন</p>
          <div class="row justify-content-center">
            <div class="col-md-3">
              <select class="form-select fs-5 text-center" name="service_type" id="serviceType" required>
                <option value="">সেবার ধরণ নির্বাচন করুন</option>
                <option value="civil_service">নাগরিক সেবা</option>
                <option value="official_service">প্রাতিষ্ঠানিক সেবা</option>
                <option value="internal_service">অভ্যন্তরীণ সেবা</option>
              </select>
            </div>
            <div class="col-md-3">
              <select class="form-select fs-5 text-center" name="service_name" id="serviceName" required>
                <option value="">সেবা নির্বাচন করুন</option>
              </select>
            </div>
          </div>
        </div>

        <div class="grs-content alert alert-info m-0" id="grsContent">
          <p class="fw-bold">৩. অভিযোগ প্রতিকার ব্যবস্থাপনা (GRS)</p>
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
                <td>gro_address</td>
                <td>gro_deadline</td>
              </tr>
              <tr class="table-success">
                <td class="text-center">২.</td>
                <td>দায়িত্বপ্রাপ্ত কর্মকর্তা সমাধান দিতে না পারলে</td>
                <td>অভিযোগ নিষ্পত্তি বিকল্প কর্মকর্তা (অনিক)</td>
                <td>alt_gro_address</td>
                <td>alt_gro_deadline</td>
              </tr>
              <tr class="table-warning">
                <td class="text-center">৩.</td>
                <td>অভিযোগ নিষ্পত্তি কর্মকর্তা নির্দিষ্ট সময়ে সমাধান দিতে না পারলে</td>
                <td>আপিল কর্মকর্তা</td>
                <td>ao_address</td>
                <td>ao_deadline</td>
              </tr>
              <tr class="table-danger">
                <td class="text-center">৪.</td>
                <td>আপিল কর্মকর্তা নির্দিষ্ট সময়ে সমাধান দিতে না পারলে</td>
                <td>মন্ত্রিপরিষদ বিভাগের অভিযোগ ব্যবস্থাপনা সেল</td>
                <td>cabinet_address</td>
                <td>cabinet_deadline</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="expectations-content alert alert-info" id="expectationsContent">
          <p class="fw-bold">৪. আপনার কছে আমাদের প্রত্যাশা</p>
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
                <td>expectation</td>
              </tr>
              <tr>
                <td class="text-center align-middle">২.</td>
                <td>expectation</td>
              </tr>
              <tr>
                <td class="text-center align-middle">৩.</td>
                <td>expectation</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

    </main>

    <!-- Footer Area -->
    <?php
    include 'footer.php';
    ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
  <script src="https://cdn.lordicon.com/lordicon.js"></script>
</body>

</html>