<nav class="navbar navbar-expand-sm bg-warning p-2 fs-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <lord-icon src="https://cdn.lordicon.com/pbbsmkso.json" trigger="loop" delay="100" style="width:30px;height:30px">
      </lord-icon>
    </a>
    <button class="navbar-toggler btn btn-outline-light" type="button" data-bs-toggle="offcanvas"
      data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end bg-warning" tabindex="-1" id="offcanvasNavbar"
      aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title fw-bold" id="offcanvasNavbarLabel">অভ্যন্তরীণ সম্পদ বিভাগ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3 fw-bold">
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="home.php">
              <i class="fa-solid fa-house"></i> হোম</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link mx-lg-2 dropdown-toggle" href="charter_composition.php" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-file-lines"></i> চার্টার প্রণয়ন
            </a>
            <ul class="dropdown-menu bg-warning fs-5">
              <li class="dropdown-item"><a class="nav-link" href="#">ভিশন ও মিশন
                  প্রণয়ন</a></li>
              <li class="dropdown-item"><a class="nav-link" href="#">প্রতিশ্রুতি ও সেবাসমূহ</a></li>
              <li class="dropdown-item"><a class="nav-link" href="#">অভিযোগ প্রতিকার ব্যবস্থাপনা</a></li>
              <li class="dropdown-item"><a class="nav-link" href="#">আপনার কাছে প্রত্যাশা</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link mx-lg-2 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class="fa-solid fa-file-lines"></i> চার্টার হালনাগাদকরণ
            </a>
            <ul class="dropdown-menu bg-warning fs-5">
              <li class="dropdown-item"><a class="nav-link" href="#">ভিশন ও মিশন হালনাগাদ</a></li>
              <li class="dropdown-item"><a class="nav-link" href="#">প্রতিশ্রুতি ও সেবাসমূহ হালনাগাদ</a></li>
              <li class="dropdown-item"><a class="nav-link" href="#">অভিযোগ প্রতিকার ব্যবস্থাপনা হালনাগাদ</a></li>
              <li class="dropdown-item"><a class="nav-link" href="#">আপনার কাছে প্রত্যাশা হালনাগাদ</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="#"><i class="fa-solid fa-table-columns"></i> ড্যাশবোর্ড</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link mx-lg-2 dropdown-toggle" href="charter_composition.php" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-file-lines"></i> ইউজার ব্যবস্থাপনা
            </a>
            <ul class="dropdown-menu bg-warning fs-5">
              <li class="dropdown-item"><a class="nav-link" href="user-creation.php">ইউজার তৈরী</a></li>
              <li class="dropdown-item"><a class="nav-link" href="#">ইউজার তালিকা</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="#"><i class="fa-solid fa-user"></i> ইউজার</a>
          </li>
        </ul>
      </div>
    </div>
    <a class="btn btn-outline-danger fw-bold" href="#"><i class="fa-solid fa-right-from-bracket"></i> লগ আউট</a>
  </div>
</nav>