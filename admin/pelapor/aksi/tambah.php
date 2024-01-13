<?php
include '../../../koneksi.php';

// Ambil data dari form
$kode_pelapor = $_POST["kode_pelapor"];
$nama_pelapor = $_POST["nama_pelapor"];
$nik_pelapor = $_POST["nik_pelapor"];
$hubungan_dengan_korban = $_POST["hubungan_dengan_korban"];
$alamat_pelapor = $_POST["alamat_pelapor"];
$kontak_pelapor = $_POST["kontak_pelapor"];

// Masukkan data ke database
$sql = "INSERT INTO `pelapor` 
(`kode_pelapor`, `nama_pelapor`, `nik_pelapor`, `hubungan_dengan_korban`, `alamat_pelapor`, 
`kontak_pelapor`) 
VALUES ('$kode_pelapor', '$nama_pelapor', '$nik_pelapor', '$hubungan_dengan_korban', '$alamat_pelapor', 
'$kontak_pelapor')";
$result = mysqli_query($conn, $sql);

if ($result) {
    // echo "Data berhasil ditambahkan";
    echo "
    <script>
        alert('Data berhasil ditambahkan');
        window.location.href = '../tampilan/tambah_data_pelapor.php';
    </script>";
} else {
    echo "Data gagal ditambahkan: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
