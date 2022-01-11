<?php session_start();
include_once 'security.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css">
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
    <script src="sweetalert2-11.1.10/package/dist/sweetalert2.min.js"></script>
    <script src="sweetalert2-11.1.10/package/dist/sweetalert2.all.min.js"></script>
    <link href="css/dashboard.css" rel="stylesheet">
    <title>Admin</title>


</head>

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
                    <h1 class="h2">Accounts</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-md btn-outline-success" data-bs-toggle="modal" data-bs-target="#CreateModal">
                                New Admin <i class="fas fa-user-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <?php
                if (isset($_SESSION['username'])) {
                    echo '<div class="container table-responsive">
                    <table class="table table-sm bg-white" id="admin_table">
                        <thead class="table-primary">
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>';
                    echo '
                                    <tbody>
                                    <tr>
                                    <td scope="row">1</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary btn-flat edit_button">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-flat delete_button">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                <td scope="row">2</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>mark123</td>
                                <td>markotto123</td>
                                <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary btn-flat edit_button">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-flat delete_button">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                              </tr>
                              <tr>
                                <td scope="row">3</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>jacobThorn</td>
                                <td>jacobThorn123</td>
                                <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary btn-flat edit_button">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-flat delete_button">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                              </tr>
                              <tr>
                                <td scope="row">4</td>
                                <td>Amber</td>
                                <td>King</td>
                                <td>KingAmber</td>
                                <td>Kingamber</td>
                                <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary btn-flat edit_button">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-flat delete_button">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                              </tr>
                              <tr>
                                <td scope="row">5</td>
                                <td>Forrest</td>
                                <td>Taylor</td>
                                <td>ForrestTay</td>
                                <td>ForrestTaylor</td>
                                <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary btn-flat edit_button">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-flat delete_button">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                              </tr>
                        </tbody>';
                }
                echo '</table>
                    </div>';
                ?>

                <!--       modal -->
                <div class="modal fade" id="CreateModal" tabindex="-1" aria-labelledby="CreateModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header text-white bg-dark">
                                <h5 class="modal-title" id="CreateModalLabel">Create Admin</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <form action="includes/admin.php" method="POST" autocomplete="off">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="firstname" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="lastname" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="create" class="btn btn-primary">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="UpdateModal" tabindex="-1" aria-labelledby="UpdateModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header text-white bg-dark">
                                <h5 class="modal-title" id="UpdateModalLabel">Update Admin information</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <form action="includes/admin.php" method="POST" autocomplete="off">
                                <div class="modal-body">
                                    <input type="hidden" name="id" id="id">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="firstname" id="firstname" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="lastname" id="lastname" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" id="username" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" id="password" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="DeleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header text-white bg-dark">
                                <h5 class="modal-title" id="DeleteModalLabel">Delete Admin</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <form action="includes/admin.php" method="POST">
                                <div class="modal-body">
                                    <input type="hidden" name="deleteId" id="deleteId">

                                    <h4>Delete?</h4>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                    <button type="submit" name="delete" class="btn btn-primary">Confirm</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#admin_table').DataTable();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#admin_table').on('click', '.edit_button', function() {
                $('#UpdateModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $("#id").val(data[0]);
                $("#firstname").val(data[1]);
                $("#lastname").val(data[2]);
                $("#username").val(data[3]);
                $("#password").val(data[4]);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#admin_table').on('click', '.delete_button', function() {
                $('#DeleteModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $("#deleteId").val(data[0]);
            });
        });
    </script>
</body>
<?php include "script.php"; ?>

</html>