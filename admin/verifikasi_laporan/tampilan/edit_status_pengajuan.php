<?php
include '../../../koneksi.php';
$no_registrasi = $_GET['no_registrasi'];
$status = $_GET['status'];
$table =  strpos($no_registrasi, 'UPTD-PP') !== false
    ? 'kasus_dewasa'
    : (
        strpos($no_registrasi, 'UPTD-PKA') !== false
        ? 'kasus_anak'
        : ''
    );

if ($status == 'Sedang Diproses') {
    $status = 'Diterima';
} elseif ($status == 'Diterima') {
    $status = 'Selesai';
}
$sql = "UPDATE $table SET
        `status_pengajuan` = '$status'
        WHERE `no_registrasi` = '$no_registrasi'";
$statusResult = 'Kasus berhasil diverifikasi';
if ($status == 'Ditolak') {
    $sql = "DELETE FROM $table WHERE `no_registrasi` = '$no_registrasi'";
    $statusResult = 'Kasus Berhasil Ditolak';
}
$result = mysqli_query($conn, $sql);

if ($result) {
    // echo "Kasus berhasil diverifikasi";
    echo "
    <script>
        alert('$statusResult');
        window.location.href = 'verifikasi_laporan.php';
    </script>";
} else {
    echo "Akun gagal diverifikasi: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
