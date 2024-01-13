<?php
include '../../../koneksi.php';

// Ambil data dari form
$no_registrasi = $_POST["no_registrasi"];
$nama_korban = $_POST["nama_korban"];
$nik_korban = $_POST["nik_korban"];
$jenis_kelamin_korban = $_POST["jenis_kelamin_korban"];
$ttl_korban = $_POST["ttl_korban"];
$umur_korban = $_POST["umur_korban"];
$kronologi_singkat = $_POST["kronologi_singkat"];
$alamat = $_POST["alamat"];
$pekerjaan_korban = $_POST["pekerjaan_korban"];
$status_perkawinan_korban = $_POST["status_perkawinan_korban"];
$kontak_korban = $_POST["kontak_korban"];
$jenis_kasus = $_POST["jenis_kasus"];
$tanggal_kejadian = $_POST["tanggal_kejadian"];
$alamat_tkp = $_POST["alamat_tkp"];
$kecamatan = $_POST["kecamatan"];
$nama_pelaku = $_POST["nama_pelaku"];
$nik_pelaku = $_POST["nik_pelaku"];
$ttl_pelaku = $_POST["ttl_pelaku"];
$umur_pelaku = $_POST["umur_pelaku"];
$hubungan_dengan_korban = $_POST["hubungan_dengan_korban"];
$alamat_pelaku = $_POST["alamat_pelaku"];
$pekerjaan_pelaku = $_POST["pekerjaan_pelaku"];
$status_perkawinan_pelaku = $_POST["status_perkawinan_pelaku"];
$kontak_pelaku = $_POST["kontak_pelaku"];
$satgas = $_POST["satgas"];

// Masukkan data ke database
$sql = "INSERT INTO `kasus_dewasa` 
(`no_registrasi`, `nama_korban`, `nik_korban`, `jenis_kelamin_korban`, `ttl_korban`, 
`umur_korban`, `kronologi_singkat`, `alamat`, `pekerjaan_korban`, `status_perkawinan_korban`, 
`kontak_korban`, `jenis_kasus`, `tanggal_kejadian`, `alamat_tkp`, `kecamatan`, 
`nama_pelaku`, `nik_pelaku`, `ttl_pelaku`, `umur_pelaku`, `hubungan_dengan_korban`, 
`alamat_pelaku`, `pekerjaan_pelaku`,  `status_perkawinan_pelaku`, `kontak_pelaku`, `satgas`) 
VALUES ('$no_registrasi', '$nama_korban', '$nik_korban', '$jenis_kelamin_korban', '$ttl_korban', 
'$umur_korban', '$kronologi_singkat', '$alamat', '$pekerjaan_korban', '$status_perkawinan_korban', 
'$kontak_korban', '$jenis_kasus', '$tanggal_kejadian', '$alamat_tkp', '$kecamatan', 
'$nama_pelaku', '$nik_pelaku', '$ttl_pelaku', '$umur_pelaku', '$hubungan_dengan_korban', 
'$alamat_pelaku', '$pekerjaan_pelaku', '$status_perkawinan_pelaku', '$kontak_pelaku', '$satgas')";
$result = mysqli_query($conn, $sql);

if ($result) {
    // echo "Data berhasil ditambahkan";
    echo "
    <script>
        alert('Data berhasil ditambahkan');
        window.location.href = '../../';
    </script>";
} else {
    echo "Data gagal ditambahkan: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
