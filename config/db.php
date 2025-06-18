<?php
$host = getenv('DB_HOST') ?: 'localhost';
$port = getenv('DB_PORT') ?: '3306';
$db   = getenv('DB_DATABASE') ?: 'nama_database';
$user = getenv('DB_USERNAME') ?: 'root';
$pass = getenv('DB_PASSWORD') ?: '';


$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";

try {
    
    $pdo = new PDO($dsn, $user, $pass);


    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


} catch (PDOException $e) {

    http_response_code(500);
    echo "❌ Database connection failed: " . $e->getMessage();
    exit;
}
?>
