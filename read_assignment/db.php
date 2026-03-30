<?php
$host   = "localhost";
$user   = "root";
$pass   = "";
$dbname = "messages_db";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $user,
        $pass
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Works";
} catch (PDOException $e) {
    die("Verbinding mislukt: " . $e->getMessage());
}
