<?php
include '../../../koneksi.php';

// Ambil id dari parameter URL
$id = $_GET["id"];

// Hapus data dari database
$sql = "DELETE FROM kasus_dewasa WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "
    <script>
        alert('Data berhasil dihapus');
        window.location.href = '../tampilan/lihat_data_kasus_dewasa.php';
    </script>";
} else {
    echo "Data gagal dihapus: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
