<?php
include '../../../koneksi.php';
$no_registrasi = $_GET['no_registrasi'];
$status = $_GET['status'] == 'Sedang Diproses' ? 'Diterima' : 'Selesai';
$table =  strpos($no_registrasi, 'UPTD-PP') !== false
    ? 'kasus_dewasa'
    : (
        strpos($no_registrasi, 'UPTD-PKA') !== false
        ? 'kasus_anak'
        : ''
    );
$sql = "UPDATE $table SET
        `status_pengajuan` = '$status'
        WHERE `no_registrasi` = '$no_registrasi'";

$result = mysqli_query($conn, $sql);

if ($result) {
    // echo "Kasus berhasil diverifikasi";
    echo "
    <script>
        alert('Kasus berhasil diverifikasi');
        window.location.href = 'status_pengajuan.php';
    </script>";
} else {
    echo "Akun gagal diverifikasi: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
