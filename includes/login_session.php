<?php
/*
* This include file contains functions for handling the login process.
* These may be called from any page that needs to handle login/logout,
* or that needs to check whether the user is logged in.
*/

session_start();


if (!isset($_SESSION["login_token"])) {
    $_SESSION["login_token"] = bin2hex(random_bytes(32));
}


$login_token = $_SESSION["login_token"] ?? false;
$logged_in = $_SESSION["logged_in"] ?? false;

// Do the login.
function login()
{
    session_regenerate_id(true);
    $_SESSION["logged_in"] = true;
}

// Do the logout.
function logout()
{
    $_SESSION = [];
    $params = session_get_cookie_params();

    setcookie(
        "PHPSESSID",
        "",
        time() - 3600,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );

    session_destroy();

    $logged_in = false;
}

function require_login($logged_in)
{
    if (!$logged_in) {
        $_SESSION["login_error"] = "Please login to view this requested page.";
        header("Location: index.php");
        exit();
    }
}
?>
