<?php
/*
 * This processing page handles the login form submission.
 * On successful login, it redirects the user to the home page or a previously set redirect target.
 */ 

require_once 'includes/config.php';
require_once 'includes/login_session.php';

/* if(
    $logged_in 
    || $_SERVER["REQUEST_METHOD"] !== "POST" 
    || !isset( $_POST["login_token"]) 
    || $_POST["login_token"] !== $login_token
){
    header("Location: herosheet.php");
    exit();
};
 */
$user = $_POST['user'] ?? null;
$password = $_POST['password'] ?? null;
$_SESSION["login_error"] = null;


if ($user === BACKDOOR_USER && $password === BACKDOOR_PASSWORD){
    login();
    header("Location: herosheet.php");
    exit();

} else {
    $_SESSION["login_error"] = "Invalid username or password.";
    header("Location: index.php");
    exit();
}