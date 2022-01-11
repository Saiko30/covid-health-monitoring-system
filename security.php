<?php

if (!$_SESSION['username'] == 'admin') {
    header("Location: login.php");
}
