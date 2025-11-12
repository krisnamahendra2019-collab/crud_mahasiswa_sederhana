# Aplikasi CRUD Data Mahasiswa Sederhana

Aplikasi web sederhana untuk mengelola data mahasiswa (Create, Read, Update, Delete) menggunakan *PHP* dan *MySQL* dengan server lokal *Laragon*.

---

## 📂 Struktur Folder

crud_mahasiswa_sederhana/
├─ index.php        → Menampilkan data mahasiswa
├─ add.php          → Menambah data baru
├─ edit.php         → Mengedit data yang ada
├─ delete.php       → Menghapus data berdasarkan ID
├─ db.php           → Koneksi ke database MySQL
├─ schema.sql       → Struktur database
└─ uploads/         → Folder penyimpanan foto mahasiswa


---

## 🧠 Database
*Nama Database:* crud_mahasiswa  
*Nama Tabel:* mahasiswa

| Kolom     | Tipe Data     | Keterangan              |
|------------|----------------|-------------------------|
| id         | INT (AI, PK)   | ID Mahasiswa (unik)     |
| nama       | VARCHAR(100)   | Nama mahasiswa          |
| nim        | VARCHAR(20)    | Nomor Induk Mahasiswa   |
| prodi      | VARCHAR(50)    | Program studi           |
| angkatan   | VARCHAR(10)    | Tahun angkatan          |
| foto       | VARCHAR(100)   | Nama file foto          |
| status     | VARCHAR(20)    | Status mahasiswa        |

---

## 🚀 Cara Menjalankan
1. Jalankan *Laragon, klik **Start All*
2. Buka browser dan akses:
   
   http://localhost/crud_mahasiswa_sederhana/
   
3. Pastikan database crud_mahasiswa sudah ada (import dari schema.sql jika belum).
4. Aplikasi siap digunakan 🎉

---

## 👨‍💻 Pembuat
Nama: I Gusti Putu Agus Krisna Mahendra  
Mata Kuliah: Pengembangan Sistem Backend (BA243)  
Dosen: Gede Sastrawangsa