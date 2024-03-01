<?php
/*
 * This processing page handles the logout process for the application.
 * It destroys the user's session and then redirects the user to the home page.
 */
require_once 'includes/config.php';
require_once 'includes/login_session.php';
include 'includes/functions.php';

logout();
header("Location: index.php");
exit();

