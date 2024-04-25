<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["create-email"];
    $password = $_POST["create-password"];
    $re_password = $_POST["re-password"];

    try {
        require_once "databasehandler.inc.php";
        
        $query = "DELETE FROM users WHERE user_email = :user_email AND user_password = :user_password";

        $stmt = $pdo -> prepare($query);

        $stmt -> bindParam(":user_email", $email); 
        $stmt -> bindParam("user_password", $password);

        $stmt -> execute();

        $pdo = null;
        $stmt = null;
        
        header("Location: ../index.php");
        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

    if(empty($email) || empty($password)) {
        header("Location: ../index.php");
        exit();
    }

}  else {
    header("Location: ../index.php");
}