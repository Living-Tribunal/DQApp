<?php
/*
* This page displays the user's account information.
* It requires the user to be logged in.
*/
require_once 'includes/config.php';
require_once 'includes/login_session.php';
include 'includes/functions.php';

require_login($logged_in);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Lab</title>
    <!-- Can change the family parameter to 1-8 to switch styles. -->
    <!-- https://www.w3.org/StyleSheets/Core/preview -->
    <link rel="stylesheet" href="https://www.w3.org/StyleSheets/Core/parser.css?doc=XML&family=8">
</head>

<body>
    <a href="logout.php">Log Out</a>
    <a href="home.php">Home</a>
    <h1>My Account</h1>
    <h2>My Orders</h2>
    <ul>
        <li>Order 1</li>
        <li>Order 2</li>
        <li>Order 3</li>
    </ul>
</body>

</html>