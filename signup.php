<?php
    require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Account - SpeakOutU</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/signup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/f8e1898ab0.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="overlay">
        <form class="signup-container" action="includes/formhandler.inc.php" method="post">
            <label class="signup-message">CREATE ACCOUNT</label>
            <input type="text" id="email" name="create-email" placeholder="Enter School Email">
            <input type="password" id="password" name="create-password" placeholder="Create Password">
            <input type="password" id="re-password" name="re-password" placeholder="Re-enter Password">
            <button type="submit" class="signup-button" id="signup-button">SIGN UP</button>
            <button type="button" class="re-login" id="re-login">Back to Login</button>
        </form>
    </div>
</body>
</html>
