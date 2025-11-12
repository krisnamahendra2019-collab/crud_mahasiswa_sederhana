<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hanya hapus 1 data mahasiswa, bukan tabelnya
    $stmt = $pdo->prepare("DELETE FROM mahasiswa WHERE id = ?");
    $stmt->execute([$id]);
}

header("Location: index.php");
exit;
?>