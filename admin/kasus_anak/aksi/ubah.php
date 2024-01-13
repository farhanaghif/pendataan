<?php
include '../../../koneksi.php';

// Ambil data dari form
$id = $_POST["id"]; // The hidden input field in the form

$no_registrasi = $_POST["no_registrasi"];
$nama_korban = $_POST["nama_korban"];
$nik_korban = $_POST["nik_korban"];
$jenis_kelamin_korban = $_POST["jenis_kelamin_korban"];
$ttl_korban = $_POST["ttl_korban"];
$umur_korban = $_POST["umur_korban"];
$kronologi_singkat = $_POST["kronologi_singkat"];
$alamat = $_POST["alamat"];
$nama_wali_korban = $_POST["nama_wali_korban"];
$nik_wali = $_POST["nik_wali"];
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
$kontak_pelaku = $_POST["kontak_pelaku"];
$satgas = $_POST["satgas"];

// Update data di database
$sql = "UPDATE `kasus_anak` SET
        `no_registrasi` = '$no_registrasi',
        `nama_korban` = '$nama_korban',
        `nik_korban` = '$nik_korban',
        `jenis_kelamin_korban` = '$jenis_kelamin_korban',
        `ttl_korban` = '$ttl_korban',
        `umur_korban` = '$umur_korban',
        `kronologi_singkat` = '$kronologi_singkat',
        `alamat` = '$alamat',
        `nama_wali_korban` = '$nama_wali_korban',
        `nik_wali` = '$nik_wali',
        `kontak_korban` = '$kontak_korban',
        `jenis_kasus` = '$jenis_kasus',
        `tanggal_kejadian` = '$tanggal_kejadian',
        `alamat_tkp` = '$alamat_tkp',
        `kecamatan` = '$kecamatan',
        `nama_pelaku` = '$nama_pelaku',
        `nik_pelaku` = '$nik_pelaku',
        `ttl_pelaku` = '$ttl_pelaku',
        `umur_pelaku` = '$umur_pelaku',
        `hubungan_dengan_korban` = '$hubungan_dengan_korban',
        `alamat_pelaku` = '$alamat_pelaku',
        `pekerjaan_pelaku` = '$pekerjaan_pelaku',
        `kontak_pelaku` = '$kontak_pelaku',
        `satgas` = '$satgas'
        WHERE `id` = '$id'";

$result = mysqli_query($conn, $sql);

if ($result) {
    // echo "Data berhasil diupdate";
    echo "
    <script>
        alert('Data berhasil diupdate');
        window.location.href = '../tampilan/lihat_data_kasus_anak.php';
    </script>";
} else {
    echo "Data gagal diupdate: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
