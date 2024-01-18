<?php
include '../../../koneksi.php';
$id = $_GET["id"];

$sql = "UPDATE `login` SET
        `status_verifikasi` = 1
        WHERE `id` = $id";
// echo $sql;

$result = mysqli_query($conn, $sql);

if ($result) {
    // echo "Akun berhasil diverifikasi";
    echo "
    <script>
        alert('Akun berhasil diverifikasi');
        window.location.href = '../tampilan/index.php';
    </script>";
} else {
    echo "Akun gagal diverifikasi: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
