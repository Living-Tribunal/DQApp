<?php

require_once 'includes/config.php';
require_once 'includes/login_session.php';

$user = $_POST['user'] ?? null;
$password = $_POST['password'] ?? null;
$_SESSION["login_error"] = null;


if ($user === BACKDOOR_USER && $password === BACKDOOR_PASSWORD){
    login();
    header("Location: herosheetview.php");
    exit();

} else {
    $_SESSION["login_error"] = "Invalid username or password.";
    header("Location: index.php");
    exit();
}
