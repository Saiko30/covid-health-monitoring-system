<?php session_start();
include_once "security.php";
?>
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
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
    <script src="sweetalert2-11.1.10/package/dist/sweetalert2.min.js"></script>
    <script src="sweetalert2-11.1.10/package/dist/sweetalert2.all.min.js"></script>
    <title>Patient</title>


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



<link href="dashboard.css" rel="stylesheet">
</head>

<body>

    <?php include_once "nav.php"; ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
            <h1 class="h2">Patient's Information</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-md btn-outline-success" data-bs-toggle="modal" data-bs-target="#CreateModal">
                        New Patient <i class="fas fa-user-plus"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="container table-responsive" style="margin-bottom: 30px;">
            <table id="PatientInfoTable" class="table table-sm">
                <colgroup>
                    <col width="5%">
                    <col width="15%">
                    <col width="15%">
                    <col width="15%">
                    <col width="5%">
                    <col width="5%">
                    <col width="15%">
                    <col width="15%">
                    <col width="20%">
                </colgroup>
                <thead class="table-primary">
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Contact Number</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Civil Status</th>
                    <th>Address</th>
                    <th>Medical</th>
                    <th class="text-center">Action</th>
                </thead>

                <tr class="data-row">
                    <td>1</td>
                    <td>Jane</td>
                    <td>Doe</td>
                    <td>09045634891</td>
                    <td>26</td>
                    <td>Female</td>
                    <td>Married</td>
                    <td>Catbalogan City</td>
                    <td> <button type="button" class="btn btn-warning btn-flat medicalBtn" data-bs-toggle="modal" data-bs-target="#MedicalModal1">
                            <i class="fas fa-eye"></i>
                        </button></td>
                    <td class="text-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary btn-flat editBtn">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-flat deleteBtn">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="data-row">
                    <td>2</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>09089043241</td>
                    <td>29</td>
                    <td>Male</td>
                    <td>Married</td>
                    <td>Catarman City</td>
                    <td> <button type="button" class="btn btn-warning btn-flat medicalBtn" data-bs-toggle="modal" data-bs-target="#MedicalModal2">
                            <i class="fas fa-eye"></i>
                        </button></td>
                    <td class="text-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary btn-flat editBtn">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-flat deleteBtn">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <div class="modal fade" id="CheckModal" tabindex="-1" aria-labelledby="CheckModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-white bg-dark">
                        <h5 class="modal-title" aria-labelledby="CheckModalLabel">Medical Info</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="includes/patient.php" method="POST" autocomplete="off">
                        <div id="modal-body" class=modal-body">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="CreateModal" tabindex="-1" aria-labelledby="CreateModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-white bg-dark">
                        <h5 class="modal-title" aria-labelledby="CreateModalLabel">Insert New Patient</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="includes/patient.php" method="POST" autocomplete="off">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="firstname" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastname" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <label>Contact Number</label>
                                <input type="text" name="contactNum" class=" form-control" placeholder="Contact Number">
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" name="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input type="text" name="age" class="form-control" placeholder="Age">
                            </div>
                            <div class="form-group">
                                <label>Civil Status</label>
                                <select class="form-control" name="civilStat">
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Widow/widower">Widow/Widower</option>
                                    <option value="Separated/annulled">Separated/Annulled</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Address">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="register" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="UpdateModal" tabindex="-1" aria-labelledby="UpdateModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-white bg-dark">
                        <h5 class="modal-title" id="UpdateModalLabel">Update Patient Information</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="includes/patient.php" method="POST" autocomplete="off">
                        <div class="modal-body">
                            <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="firstname" id="firstname" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastname" id="lastname" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Contact Number</label>
                                <input type="text" name="contactNum" id="contactNumber" class=" form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" name="gender" id="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input type="text" name="age" id="age" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Civil Status</label>
                                <select class="form-control" name="civilStat" id="civilStat">
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                    <option value="widow/widower">Widow/Widower</option>
                                    <option value="separated/annulled">Separated/Annulled</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" id="address" class="form-control" required>
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
                        <h5 class=" modal-title" id="DeleteModalLabel">Delete Patient</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <h4>Delete?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="register" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="MedicalModal1" tabindex="-1" aria-labelledby="MedicalModalLabel1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-white bg-dark">
                        <h5 class="modal-title" aria-labelledby="MedicalModalLabel1">Covid Medical Test Result</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <h4>No Medical Test Record.</h4>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="register" class="btn btn-danger">Delete</button>
                    </div>

                </div>
            </div>
        </div>
        </div>
        <div class="modal fade" id="MedicalModal2" tabindex="-1" aria-labelledby="MedicalModalLabel1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-white bg-dark">
                        <h5 class="modal-title" aria-labelledby="MedicalModalLabel1">Covid Medical Test Result</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="includes/patient.php" method="POST" autocomplete="off">
                        <div class="modal-body">
                            <form action="includes/patient.php" method="POST">
                                <input type="hidden" name="deleteId" id="deleteId">
                                <div class="container">
                                    <div class="row g-3 justify-content-center">
                                        <dt class="col-lg-8 mb-3">
                                            <label>1. Are you currently experiencing, or have experienced in the past 14 days, any of the following symptoms?</label>
                                        </dt>
                                        <div class="col-lg-4">
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="col-sm-2"></div>
                                        <div class="col-lg-6 mb-3">
                                            <label>- Fever? (37.8°C or greater as measured by an oral thermometer)</label>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="col-sm-2"></div>
                                        <div class="col-lg-6 mb-3">
                                            <label>-Cough?</label>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="col-sm-2"></div>
                                        <div class="col-lg-6 mb-3">
                                            <label>-Shortness of breath or difficulty of breathing?</label>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="form-check-label">No</label>
                                        </div>
                                        <div class="col-sm-2"></div>
                                        <div class="col-lg-6 mb-3">
                                            <label>-Sore throat?</label>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="col-sm-2"></div>
                                        <div class="col-lg-6 mb-3">
                                            <label>-loss of taste or smell?</label>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="form-check-label">No</label>
                                        </div>
                                        <div class="col-sm-2"></div>
                                        <div class="col-lg-6 mb-3">
                                            <label>-Chills?</label>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="form-check-label">No</label>
                                        </div>
                                        <div class="col-sm-2"></div>
                                        <div class="col-lg-6 mb-3">
                                            <label>-Head or muscles aches?</label>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="form-check-label">No</label>
                                        </div>
                                        <div class="col-sm-2"></div>
                                        <div class="col-lg-6 mb-3">
                                            <label>-Nasuea, diarrhea, vomiting?</label>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="form-check-label">No</label>
                                        </div>
                                        <hr class="my-4">
                                        <dt class="col-lg-8 mb-3 mt-4">
                                            <label>
                                                2. In the past 14 days, have you been in close proximity to anyone who was experiencing any of the above symptoms or has experienced any of the above symptoms since your contact?
                                            </label>
                                        </dt>
                                        <div class="col-lg-4">
                                            <label class="form-check-label">No</label>
                                        </div>
                                        <hr class="my-4">
                                        <dt class="col-lg-8 mb-3 mt-4">
                                            <label>
                                                3. In the past 14 days, have you been in close proximity to anyone who has tested positive for COVID-19?
                                            </label>
                                        </dt>
                                        <div class="col-lg-4">
                                            <label class="form-check-label">No</label>
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
                                        <div class="col-lg-4">
                                            <label class="label">No</label>
                                        </div>
                                        <hr class="my-4">
                                        <dt class="col-lg-8 mb-3 mt-4">
                                            <label>
                                                5. Have you tested positive for COVID-19, or presumptively positive for COVID-19 based on your health care providers assessment on your symptoms?
                                            </label>
                                        </dt>
                                        <div class="col-lg-4 mt-4"></div>
                                        <div class="col-sm-1"></div>
                                        <div class="col mb-3">
                                            <label>If Yes, when were you diagnosed?</label>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="label">No</label>
                                        </div>
                                        <hr class="my-4">
                                        <dt class="col-lg-8 mb-3 mt-4">
                                            <label>
                                                6. In the past 14 days, have you been on a commercial flight or traveled outside of the Philippines?
                                            </label>
                                        </dt>
                                        <div class="col-lg-4">
                                            <label class="label">No</label>
                                        </div>
                                        <hr class="my-4">
                                        <dt class="col-lg-8 mb-3 mt-4">
                                            <label>
                                                7. In the past 14 days, have you been inclose proximity to anyone who has been on a commercial flight or traveled outside of the Philippines?
                                            </label>
                                        </dt>
                                        <div class="col-lg-4">
                                            <label class="label">No</label>
                                        </div>
                                        <hr class="my-4">
                                        <dt class="col-lg-8 mb-3 mt-4">
                                            <label>
                                                8. Do you have any comorbidities (illness)?
                                            </label>
                                        </dt>
                                        <div class="col-lg-4">
                                            <label class="label">No</label>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="register" class="btn btn-danger">Delete</button>
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
            $('#PatientInfoTable').DataTable();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#PatientInfoTable').on('click', '.editBtn', function() {
                $('#UpdateModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $("#id").val(data[0]);
                $("#firstname").val(data[1]);
                $("#lastname").val(data[2]);
                $("#contactNumber").val(data[3]);
                $("#age").val(data[4]);
                $("#gender").val(data[5]);
                $("#civilStat").val(data[6]);
                $("#address").val(data[7]);
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#PatientInfoTable').on('click', '.deleteBtn', function() {
                $('#DeleteModal').modal('show');

                $table_row = $(this).closest('tr');

                var data = $table_row.children('td').map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $("#deleteId").val(data[0]);
            });
        });
    </script>

    </main>
</body>
<?php include "script.php"; ?>

</html>