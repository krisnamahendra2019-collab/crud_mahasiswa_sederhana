<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Data Mahasiswa</title></head>
<body>
<h2>Data Mahasiswa</h2>
<a href="add.php">+ Tambah Data</a><br><br>

<table border="1" cellpadding="6" cellspacing="0">
<tr>
  <th>ID</th><th>Nama</th><th>NIM</th><th>Prodi</th>
  <th>Angkatan</th><th>Foto</th><th>Status</th><th>Aksi</th>
</tr>

<?php
$stmt = $pdo->query("SELECT * FROM mahasiswa ORDER BY id DESC");
foreach ($stmt as $row): ?>
// Menampilkan daftar mahasiswa 
<tr>
  <td><?= $row['id'] ?></td>
  <td><?= $row['nama'] ?></td>
  <td><?= $row['nim'] ?></td>
  <td><?= $row['prodi'] ?></td>
  <td><?= $row['angkatan'] ?></td>
  <td><img src="uploads/<?= $row['foto'] ?>" width="60"></td>
  <td><?= $row['status'] ?></td>
  <td>
    <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> | 
    <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
  </td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>