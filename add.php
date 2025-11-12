<?php include 'db.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $angkatan = $_POST['angkatan'];
    $status = $_POST['status'];

    // upload foto
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    move_uploaded_file($tmp, "uploads/" . $foto);

    $sql = "INSERT INTO mahasiswa (nama, nim, prodi, angkatan, foto, status)
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nama, $nim, $prodi, $angkatan, $foto, $status]);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head><title>Tambah Data Mahasiswa</title></head>
<body>
<h2>Tambah Data Mahasiswa</h2>
<form method="post" enctype="multipart/form-data">
    Nama: <input type="text" name="nama" required><br><br>
    NIM: <input type="text" name="nim" required><br><br>
    Prodi: <input type="text" name="prodi" required><br><br>
    Angkatan: <input type="text" name="angkatan" required><br><br>
    Foto: <input type="file" name="foto" required><br><br>
    Status:
    <select name="status">
        <option value="Aktif">Aktif</option>
        <option value="Lulus">Lulus</option>
        <option value="Cuti">Cuti</option>
    </select><br><br>
    <button type="submit">Simpan</button>
</form>
<br>
<a href="index.php">Kembali ke Daftar Mahasiswa</a>
</body>
</html>