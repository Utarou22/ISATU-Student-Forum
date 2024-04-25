<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_search = $_POST["search-bar"];

    try {
        
        require_once "includes/databasehandler.inc.php";
        $query = "SELECT * FROM posts WHERE tags = :user_search;";

        $stmt = $pdo -> prepare($query);

        $stmt -> bindParam(":user_search", $user_search);

        $stmt -> execute();

        $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}  else {
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <?php
            if (empty($results)) {
                echo "<div>";
                echo "<p>Nothing found...</p>";
                echo "</div>";
            } else {
                foreach ($results as $result) {
                    echo "<div>";
                    echo "<p>". htmlspecialchars($result["post_content"]) ."</p>";
                    echo "</div>";
                }
            }
        ?>
    </section>
</body>
</html>