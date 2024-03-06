<?php 
require_once 'includes/config.php';
require_once 'includes/login_session.php';

$login_error = $_SESSION["login_error"] ?? null;


$sql = "SELECT * FROM character";
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<script src="js/myFunction.js"></script>
<head><meta charset="UTF-8"></head>
<head>
</head>
<body class="login">
    <div class="pass">
    <div class="error">
        <?php if($login_error): ?>
            <p class="error"><?= $login_error ?></p>
        <?php endif; ?>
    </div>
        <form method="POST" action="login.php">
            <label>Username:</label>
            <input type="text" size="50" name="user" placeholder="username: user">
            <label>Password:</label>
            <input type="password" size="50" name="password" placeholder="password: pass">
            <input type="hidden" placeholder="username: user" name="login_token" value="<?= htmlspecialchars($login_token)?>">
            <button onclick="" id="login" type="submit" value="Login">Login</button>
        </form>
    </div>
</body>
</html>
