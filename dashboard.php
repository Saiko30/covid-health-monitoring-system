<?php session_start();
include_once 'security.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <link rel="stylesheet" href="all.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
  <link rel="stylesheet" type="text/css" href="DataTables/datatables.css">
  <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css">
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="DataTables/datatables.min.js"></script>
  <title>Dashboard</title>


  <link href="css/dashboard.css" rel="stylesheet">
</head>

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>


<!-- Custom styles for this template -->
<link href="dashboard.css" rel="stylesheet">
</head>

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 bg-warning text-center" href="#">ADMIN</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <button class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      CoVid Health Monitoring System
    </button>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-warning sidebar collapse mt-5">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link text-light fs-5" aria-current="page" href="dashboard.php">
                <span data-feather="home"></span>
                Dashboard <i class="fas fa-home"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light fs-5" href=" admin.php">
                <span data-feather="admin"></span>
                Admin <i class="fas fa-users-cog"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light fs-5" href=" patient-information.php">
                <span data-feather="users"></span>
                Personal Info <i class="fas fa-users"></i>
              </a>
            </li>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Reports</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <li class="nav-item">
              <a class="nav-link text-light fs-5" href=" medical.php">
                <span data-feather="users"></span>
                Medical <i class="fas fa-hospital-user"></i>
              </a>
            </li>
            <hr>
            <li class="nav-item">
              <a class="nav-link text-light fs-5" href="logout.php">
                <span data-feather="users"></span>
                Logout <i class="fas fa-sign-out-alt"></i>
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
        </div>

        <!-- carousel -->

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777" />
              </svg>

              <div class="container">
                <div class="carousel-caption text-start">
                  <h1>Play your part.</h1>
                  <p>Get vaccinated against CoVid-19.</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777" />
              </svg>

              <div class="container">
                <div class="carousel-caption">
                  <h1>Know the facts.</h1>
                  <p>Never panic, always know every real thing.</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777" />
              </svg>

              <div class="container">
                <div class="carousel-caption text-end">
                  <h1>Help beat COVID today.</h1>
                  <p>Give thanks to our front-liner.</p>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col">
            <img src="img/kn1.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
          </div>
          <div class="col mb-4">
            <img src="img/slide2.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
          </div>
        </div>
      </main>
</body>

</html>