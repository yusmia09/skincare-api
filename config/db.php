<?php
// Konfigurasi koneksi database pakai environment variables
$host = getenv('DB_HOST') ?: 'localhost';
$port = getenv('DB_PORT') ?: '3306';
$db   = getenv('DB_DATABASE') ?: 'nama_database';
$user = getenv('DB_USERNAME') ?: 'root';
$pass = getenv('DB_PASSWORD') ?: '';

// Data Source Name (DSN)
$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";

try {
    // Membuat koneksi PDO
    $pdo = new PDO($dsn, $user, $pass);

    // Set attribute error handling
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Optional: set fetch mode default ke associative array
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Uncomment kalau mau cek koneksi
    // echo "✅ Connected to database successfully!";
} catch (PDOException $e) {
    // Kalau gagal koneksi, tampilkan pesan error dan hentikan program
    http_response_code(500);
    echo "❌ Database connection failed: " . $e->getMessage();
    exit;
}
?>
