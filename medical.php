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
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="sweetalert2-11.1.10/package/dist/sweetalert2.min.js"></script>
    <script src="sweetalert2-11.1.10/package/dist/sweetalert2.all.min.js"></script>
    <title>Medical</title>


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
                    <h1 class="h2">Medical Form</h1>
                </div>
                <div class="container-fluid shadow bg-secondary h5">
                    <form class="needs-validation" action="includes/medical.php" method="POST" autocomplete="off" novalidate>
                        <div class="row g-3 justify-content-center">
                            <div class="alert alert-warning" role="alert">
                                Please fill out all of the fields and answer each question honestly.
                            </div>
                            <div class="col-md-7 col-lg-8">
                                <dl class="row">
                                    <div class="input-group input-group-md mb-4">
                                        <span class="input-group-text" id="inputGroup-sizing-md">First Name</span>
                                        <input type="text" class="form-control" name="FirstName" required>
                                    </div>
                                    <div class="input-group input-group-md mb-4">
                                        <span class="input-group-text" id="inputGroup-sizing-md">Last Name</span>
                                        <input type="text" class="form-control" name="LastName" required>
                                    </div>
                                    <hr class="my-4">
                                    <dt class="col-lg-8 mb-3">
                                        <label>1. Are you currently experiencing, or have experienced in the past 14 days, any of the following symptoms?</label>
                                    </dt>
                                    <div class="col-lg-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="yes" name="QQ1">
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="no" name="QQ1">
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="col-lg-6 mb-3">
                                        <label>- Fever? (37.8°C or greater as measured by an oral thermometer)</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="yes" name="QQ1a">
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="no" name="QQ1a">
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="col-lg-6 mb-3">
                                        <label>-Cough?</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="yes" name="QQ1b">
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="no" name="QQ1b">
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="col-lg-6 mb-3">
                                        <label>-Shortness of breath or difficulty of breathing?</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="yes" name="QQ1c">
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="no" name="QQ1c">
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="col-lg-6 mb-3">
                                        <label>-Sore throat?</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="yes" name="QQ1d">
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="no" name="QQ1d">
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="col-lg-6 mb-3">
                                        <label>-loss of taste or smell?</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="yes" name="QQ1e">
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="no" name="QQ1e">
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="col-lg-6 mb-3">
                                        <label>-Chills?</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="yes" name="QQ1f">
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="no" name="QQ1f">
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="col-lg-6 mb-3">
                                        <label>-Head or muscles aches?</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="yes" name="QQ1g">
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="no" name="QQ1g">
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="col-lg-6 mb-3">
                                        <label>-Nasuea, diarrhea, vomiting?</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="yes" name="QQ1h">
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="no" name="QQ1h">
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <dt class="col-lg-8 mb-3 mt-4">
                                        <label>
                                            2. In the past 14 days, have you been in close proximity to anyone who was experiencing any of the above symptoms or has experienced any of the above symptoms since your contact?
                                        </label>
                                    </dt>
                                    <div class="col-lg-4 mt-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="yes" name="QQ2">
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="no" name="QQ2">
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <dt class="col-lg-8 mb-3 mt-4">
                                        <label>
                                            3. In the past 14 days, have you been in close proximity to anyone who has tested positive for COVID-19?
                                        </label>
                                    </dt>
                                    <div class="col-lg-4 mt-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="yes" name="QQ3">
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="no" name="QQ3">
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <dt class="col-lg-8 mb-3 mt-4">
                                        <label>
                                            4. Have you been tested for COVID-19 and are waiting to receive test results?
                                        </label>
                                    </dt>
                                    <div class="col-lg-4 mt-4"></div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-lg-6 mb-3">
                                        <label>If Yes, what kind of test?</label>
                                    </div>
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-2"></div>
                                    <div class="form-check form-check-inline col-lg-4">
                                        <input class="form-check-input" type="radio" value="RT-PCR Swab Test" name="QQ4">
                                        <label class="form-check-label">
                                            RT-PCR Swab Test
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline col">
                                        <input class="form-check-input form-check-inline" type="radio" value="Rapid Test" name="QQ4">
                                        <label class="form-check-label">
                                            Rapid Test
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline col">
                                        <input class="form-check-input form-check-inline" type="radio" value="no" name="QQ4">
                                        <label class="form-check-label">
                                            No
                                        </label>
                                    </div>
                                    <hr class="my-4">
                                    <dt class="col-lg-8 mb-3 mt-4">
                                        <label>
                                            5. Have you tested positive for COVID-19, or presumptively positive for COVID-19 based on your health care provider's assessment on your symptoms?
                                        </label>
                                    </dt>
                                    <div class="col-lg-4 mt-4"></div>
                                    <div class="col-sm-1"></div>
                                    <div class="col mb-3">
                                        <label>If Yes, when were you diagnosed?</label>
                                    </div>
                                    <div class="ms-5">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">Date: </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="date" class="form-control" name="QQ5">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">No</label>
                                            <input class="form-check-input form-check-inline" type="radio" value="no" name="QQ5">
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <dt class="col-lg-8 mb-3 mt-4">
                                        <label>
                                            6. In the past 14 days, have you been on a commercial flight or traveled outside of the Philippines?
                                        </label>
                                    </dt>
                                    <div class="col-lg-4 mt-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="yes" name="QQ6">
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="no" name="QQ6">
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <dt class="col-lg-8 mb-3 mt-4">
                                        <label>
                                            7. In the past 14 days, have you been inclose proximity to anyone who has been on a commercial flight or traveled outside of the Philippines?
                                        </label>
                                    </dt>
                                    <div class="col-lg-4 mt-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="yes" name="QQ7">
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="no" name="QQ7">
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <dt class="col-lg-8 mb-3 mt-4">
                                        <label>
                                            8. Do you have any comorbidities (illness)?
                                        </label>
                                    </dt>
                                    <div class="col-lg-4 mt-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="yes" name="QQ8">
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="no" name="QQ8">
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                </dl>
                            </div>
                        </div>

                        <hr class="my-4">
                        <div class="align-items-center text-center">
                            <button class="w-50 btn btn-primary btn-lg" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                    <footer class="my-5 pt-5 text-light text-center text-small">
                        <p class="mb-4">&copy; 2021–2022 COVID health monitoring system</p><br>
                    </footer>
                </div>
            </main>


            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="node_modules/jquery/dist/jquery.min.js"></script>
            <script type="text/javascript" src="DataTables/datatables.min.js"></script>
</body>
<?php include "script.php"; ?>

</html>