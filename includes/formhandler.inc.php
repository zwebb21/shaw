<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    try {
        require_once "dbh.inc.php";
        $query = "INSERT INTO contactForm (name, email, message) VALUES (:name, :email, :message);";
        $stmt = $pdo->prepare($query);

        // Bind parameters
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':message', $message, PDO::PARAM_STR);

        $stmt->execute();
        $pdo = null;
        $stmt = null;
        header("Location: ../faq.php");
        die();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ../faq.php");
}
