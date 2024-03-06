<?php
// This file contains configuration information for the application.
define('BACKDOOR_USER', 'user');
define('BACKDOOR_PASSWORD', 'pass');

define('DB_DRIVER', 'sqlite');
define('DB_PATH', 'data/character.db');

$dsn = DB_DRIVER . ':' . DB_PATH;

?>
