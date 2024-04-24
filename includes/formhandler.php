<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    if(empty($email) || empty($password)) {
        header("Location: ../index.php");
        exit();
    }

    echo $email;
    echo "<br>";
    echo $password;
    echo "<br>";
    echo date("Y-m-d H:i:s");
}  