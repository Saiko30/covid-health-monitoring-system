<?php

session_start();
include_once 'connection.php';
$username = $_POST['username'];
$password = $_POST['password'];
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        header("Location: ../admin/admin-login.php?signup=empty");
        exit();
    } else {
        if ($username == 'admin' && $password == 'admin') {
            session_start();
            $_SESSION['username'] = 'admin';
            header("Location: ../dashboard.php");
        } else {
            $_SESSION['status'] = "Wrong Username or Password.";
            $_SESSION['status_code'] = "error";
            header("Location: ../login.php");
        }
    }
}
