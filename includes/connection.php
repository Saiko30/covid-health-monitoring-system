<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "covid19monitoring";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
