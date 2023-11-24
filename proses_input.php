<?php
// Koneksi ke database (gantilah dengan informasi koneksi Anda)
$host = "localhost";
$username = "root";
$password = "";
$database = "2106046_sitisarah";

$conn = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Cek apakah formulir dikirimkan menggunakan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $id_daftar = $_POST["id_daftar"];
    $nama_organisasi = $_POST["nama_organisasi"];
    $alamat = $_POST["alamat"];
    $tanggal_pendirian = $_POST["tanggal_pendirian"];
    $tujuan= $_POST["tujuan"];
    $nama_pendiri = $_POST["nama_pendiri"];
    $jumlah_divisi = $_POST["jumlah_divisi"];

    // Masukkan data ke dalam tabel (gantilah sesuai dengan struktur tabel Anda)
    $sql = "INSERT INTO sarah_tabel_organisasi (nama_organisasi, alamat, tanggal_pendirian, tujuan, nama_pendiri, jumlah_divisi) VALUES ('$nama_organisasi', '$alamat', '$tanggal_pendirian', '$tujuan', '$nama_pendiri', '$jumlah_divisi')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi ke database
$conn->close();
?>