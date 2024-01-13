<?php
include '../../../koneksi.php';

// Ambil data dari form
$kode_wilayah = $_POST["kode_wilayah"];
$nama_wilayah = $_POST["nama_wilayah"];
$kecamatan = $_POST["kecamatan"];

// Masukkan data ke database
$sql = "INSERT INTO `wilayah` 
(`kode_wilayah`, `nama_wilayah`, `kecamatan`) 
VALUES ('$kode_wilayah', '$nama_wilayah', '$kecamatan')";
$result = mysqli_query($conn, $sql);

if ($result) {
    // echo "Data berhasil ditambahkan";
    echo "
    <script>
        alert('Data berhasil ditambahkan');
        window.location.href = '../tampilan/tambah_data_wilayah.php';
    </script>";
} else {
    echo "Data gagal ditambahkan: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
