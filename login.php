<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="all.min.css">
  <script src="js/jquery.js"></script>
  <script src="sweetalert2-11.1.10/package/dist/sweetalert2.min.js"></script>
  <script src="sweetalert2-11.1.10/package/dist/sweetalert2.all.min.js"></script>
  <title>Login</title>

</head>

<body>
  <div class="container px-4 py-5 mt-5 shadow" id="featured-3">
    <div class="container-fluid">
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/li_bg.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h2 class="pb-2 mb-5 bg-warning rounded text-center">CoVid Health Monitoring System</h2>
              <h5 class="card-title mb-4">Admin Login</h5>
              <hr>
              <form action="includes/login.php" method="POST" autocomplete="off">
                <div class="input-group input-group-md mb-4">
                  <span class="input-group-text" id="inputGroup-sizing-md">Username</span>
                  <input type="text" class="form-control" name="username" required>
                </div>
                <div class="input-group input-group-md mb-4">
                  <span class="input-group-text" id="inputGroup-sizing-md">Password</span>
                  <input type="password" class="form-control" name="password" required>
                </div>
                <hr>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-lg w-50" name="submit">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
<?php include "script.php"; ?>

</html>