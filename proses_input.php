<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$database = "2106108_nurendah";

$conn = mysqli_connect($servername, $username, $password, $database);

// Jika koneksi gagal
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data dari formulir
$nama = $_POST['nama'];
$nomor = $_POST['nomor'];
$asal_sekolah = $_POST['asal_sekolah'];
$tahun = $_POST['tahun'];
$alamat = $_POST['alamat'];

// Simpan data ke database
$sql = "INSERT INTO siswa (nama, nomor, asal_sekolah, tahun, alamat)
VALUES ('$nama', '$nomor', '$asal_sekolah', '$tahun', '$alamat')";

$result = mysqli_query($conn, $sql);

// Jika simpan data berhasil
if ($result) {
  echo "Data berhasil disimpan";
} else {
  echo "Data gagal disimpan: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);

?>