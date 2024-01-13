<?php
include '../../../koneksi.php';

// Ambil data dari form
$kode_jenis_kasus = $_POST["kode_jenis_kasus"];
$jenis_kasus = $_POST["jenis_kasus"];

// Masukkan data ke database
$sql = "INSERT INTO `jenis_kasus` 
(`kode_jenis_kasus`, `jenis_kasus`) 
VALUES ('$kode_jenis_kasus', '$jenis_kasus')";
$result = mysqli_query($conn, $sql);

if ($result) {
    // echo "Data berhasil ditambahkan";
    echo "
    <script>
        alert('Data berhasil ditambahkan');
        window.location.href = '../tampilan/tambah_data_jenis_kasus.php';
    </script>";
} else {
    echo "Data gagal ditambahkan: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
