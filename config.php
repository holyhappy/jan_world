<?php
// config.php - Das Herz von Jan_World
$host = 'localhost';
$dbname = 'jan_world';
$user = 'root';
$pass = 'Amara2026!';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Datenbank-Fehler: " . $e->getMessage());
}
?>