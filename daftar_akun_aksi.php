<?php
include 'koneksi.php';

$nik = $_POST["nik"];
$username = $_POST["username"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$telp = $_POST["telp"];
$password = $_POST["password"];

$sql = "INSERT INTO login
VALUES (null,'$nik','$username','$nama','user','$alamat','$telp','$password',0,null)";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "
    <script>
        alert('Akun Akan Diverifikasi Admin Dalam 1x24 Jam');
        window.location.href = 'login.php';
    </script>";
} else {
    echo "Akun gagal didaftarkan: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
