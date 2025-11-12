<?php
include 'db.php';
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM mahasiswa WHERE id=?");
$stmt->execute([$id]);
$data = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "UPDATE mahasiswa SET nama=?, nim=?, prodi=?, angkatan=?, status=? WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['nama'], $_POST['nim'], $_POST['prodi'], $_POST['angkatan'], $_POST['status'], $id]);
    header("Location: index.php");
    exit;
}
?>
<form method="POST">
    Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>"><br>
    NIM: <input type="text" name="nim" value="<?= $data['nim'] ?>"><br>
    Prodi: <input type="text" name="prodi" value="<?= $data['prodi'] ?>"><br>
    Angkatan: <input type="text" name="angkatan" value="<?= $data['angkatan'] ?>"><br>
    Status: <input type="text" name="status" value="<?= $data['status'] ?>"><br>
    <button type="submit">Simpan</button>
</form>