<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=crud_mahasiswa", "root", "240030177krisna");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
    exit;
}
?>