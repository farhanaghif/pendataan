<?php
include '../../../koneksi.php';
session_start();
$user_id = $_SESSION["id"];
// Ambil data dari form
$no_registrasi = $_POST["no_registrasi"];
$nama_korban = $_POST["nama_korban"];
$jenis_kelamin_korban = $_POST["jenis_kelamin_korban"];
$ttl_korban = $_POST["ttl_korban"];
$umur_korban = $_POST["umur_korban"];
$alamat = $_POST["alamat"];
$kontak_korban = $_POST["kontak_korban"];
$kronologi_singkat = $_POST["kronologi_singkat"];
$nama_wali_korban = $_POST["nama_wali_korban"];
$nik_wali = $_POST["nik_wali"];
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
$kontak_pelaku = $_POST["kontak_pelaku"];

// Masukkan data ke database
$sql = "INSERT INTO `kasus_anak` 
(`no_registrasi`, `user_id`, `nama_korban`, `jenis_kelamin_korban`, `ttl_korban`, `umur_korban`, 
`alamat`, `kontak_korban`, `kronologi_singkat`, `nama_wali_korban`, `nik_wali`, 
`jenis_kasus`, `tanggal_kejadian`, `alamat_tkp`, `kecamatan`, `nama_pelaku`, 
`nik_pelaku`, `ttl_pelaku`, `umur_pelaku`, `hubungan_dengan_korban`, `alamat_pelaku`, 
`pekerjaan_pelaku`, `kontak_pelaku`, `status_pengajuan`) 
VALUES ('$no_registrasi', '$user_id', '$nama_korban', '$jenis_kelamin_korban', '$ttl_korban', '$umur_korban', 
'$alamat', '$kontak_korban', '$kronologi_singkat', '$nama_wali_korban', '$nik_wali', 
'$jenis_kasus', '$tanggal_kejadian', '$alamat_tkp', '$kecamatan', '$nama_pelaku', 
'$nik_pelaku', '$ttl_pelaku', '$umur_pelaku', '$hubungan_dengan_korban', '$alamat_pelaku', 
'$pekerjaan_pelaku', '$kontak_pelaku', 'Sedang Diproses')";
$result = mysqli_query($conn, $sql);

if ($result) {
    // echo "Data berhasil ditambahkan";
    echo "
    <script>
        alert('Data berhasil ditambahkan');
        window.location.href = '../../status_pengajuan/tampilan/status_pengajuan.php';
    </script>";
} else {
    echo "Data gagal ditambahkan: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
