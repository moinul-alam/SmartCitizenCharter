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
        <p class="alert alert-success fw-bold text-center">সিটিজেন্‌স চার্টার প্রণয়ন</p>
      </section>
      <!-- 1st Accordion Item-->
      <div class="accordion" id="accordianItems">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              ১. ভিশন ও মিশন
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordianItems">
            <div class="accordion-body">
              <!-- Content Area -->
              <form">
                <div class="mb-3">
                  <label for="visionComposition" class="form-label fw-bold">ভিশন</label>
                  <input type="text" class="form-control" id="visionComposition" placeholder="এখানে লিখুন">
                </div>

                <div class="mb-3">
                  <label for="missionComposition" class="form-label fw-bold">মিশন</label>
                  <input type="text" class="form-control" id="missionComposition" placeholder="এখানে লিখুন">
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
                </div>
                </form>
                <!-- -------- -->
            </div>
          </div>
        </div>
        <!-- -------- -->

        <!-- 2nd Accordion Item -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              ২. প্রতিশ্রুতি ও সেবাসমূহ
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordianItems">
            <div class="accordion-body">
              <!-- Nested Accordion -->
              <div class="accordion">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="nestedItemOne">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                      data-bs-target="#nestedCollapseOne" aria-expanded="false" aria-controls="nestedCollapseOne">
                      ২.১ নাগরিক সেবা
                    </button>
                  </h2>
                  <div id="nestedCollapseOne" class="accordion-collapse collapse" aria-labelledby="nestedItemOne">
                    <div class="accordion-body">
                      <!-- <form class="border" action="#">
                        <div class="row border">
                          <div class="col-md-2 mb-3">
                            <label for="serialNo" class="form-label">ক্রমিক নং</label>
                            <input type="text" class="form-control" id="serialNo">
                          </div>
                        </div>
                      </form>  -->
                      <form action="#">
                        <section class="container-fluid">
                          <table class="table table-warning table-striped table-bordered">
                            <thead>
                              <tr>
                                <th scope="col" class="col-1">ক্রমিক নং</th>
                                <th scope="col" class="col-2">সেবার নাম</th>
                                <th scope="col" class="col-2">সেবা প্রদান পদ্ধতি</th>
                                <th scope="col" class="col-1">প্রয়োজনীয় কাগজপত্র ও প্রাপ্তিস্থান</th>
                                <th scope="col" class="col-1">সেবার মূল্য ও পরিশোধ পদ্ধতি</th>
                                <th scope="col" class="col-1">সেবা প্রদানের সময়সীমা</th>
                                <th scope="col" class="col-3">দায়িত্বপ্রাপ্ত কর্মকর্তা</th>
                                <th scope="col" class="col-1">কার্যক্রম</th>
                              </tr>
                            </thead>
                            <tbody class="dynamic-row" id="dynamicRow">
                              <tr>
                              <tr>
                                <th scope="row">
                                <td>
                                  <textarea name="" id="" cols="30" rows="10"></textarea>
                                </td>
                                <td>b</td>
                                <td>c</td>
                                <td>d</td>
                                <td>e</td>
                                <td>f</td>
                                <td>g</td>
                                </th>
                              </tr>
                              </tr>
                            </tbody>
                          </table>
                          <button class="btn btn-outline-primary" type="button" onclick="addRow(7)">নতুন সারি</button>
                        </section>

                        <div class="text-center">
                          <button class="btn btn-success" type="submit">সংরক্ষণ করুন</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="nestedItemTwo">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                      data-bs-target="#nestedCollapseTwo" aria-expanded="false" aria-controls="nestedCollapseTwo">
                      ২.২ প্রাতিষ্ঠানিক সেবা
                    </button>
                  </h2>
                  <div id="nestedCollapseTwo" class="accordion-collapse collapse" aria-labelledby="nestedItemTwo">
                    <div class="accordion-body">
                      Content for subsection 2
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="nestedItemThree">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                      data-bs-target="#nestedCollapseThree" aria-expanded="false" aria-controls="nestedCollapseThree">
                      ২.২ অভ্যন্তরীণ সেবা
                    </button>
                  </h2>
                  <div id="nestedCollapseThree" class="accordion-collapse collapse" aria-labelledby="nestedItemThree">
                    <div class="accordion-body">
                      Content for subsection 2
                    </div>
                  </div>
                </div>
              </div>
              <!-- ---------- -->
            </div>
          </div>
        </div>
        <!-- ---------- -->

        <!-- 3rd Accordion Item -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              ৩. অভিযোগ প্রতিকার ব্যবস্থাপনা (GRS):
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordianItems">
            <div class="accordion-body">
              <!-- Contents Here -->
            </div>
          </div>
        </div>
        <!-- ------- -->

        <!-- 4th Accordion -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              ৪. আপনার কাছে আমাদের প্রত্যাশা:
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordianItems">
            <div class="accordion-body">
              <!-- Contents Here -->
            </div>
          </div>
        </div>
        <!-- ------- -->
      </div>
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