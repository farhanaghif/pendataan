<?php
include '../../../koneksi.php';

$no_registrasi = $_GET['no_registrasi'];
$table =  strpos($no_registrasi, 'UPTD-PP') !== false
    ? 'kasus_dewasa'
    : (
        strpos($no_registrasi, 'UPTD-PKA') !== false
        ? 'kasus_anak'
        : ''
    );
$sql = "DELETE FROM $table WHERE `no_registrasi` = '$no_registrasi'";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "
    <script>
        alert('Kasus berhasil dibatalkan');
        window.location.href = '../tampilan/status_pengajuan.php';
    </script>";
} else {
    echo "Kasus gagal dibatalkan: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
