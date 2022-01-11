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