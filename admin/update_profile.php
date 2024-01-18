<?php
include '../koneksi.php';

$id = $_POST["id"];

$nama = $_POST["nama"];
$nik = $_POST["nik"];
$alamat = $_POST["alamat"];
$telp = $_POST["telp"];
$foto_profil = $_FILES["foto_profil"]["name"];

if ($_FILES['foto_profil'] != null) {
    $target_file = "../img/photo/" . basename($_FILES["foto_profil"]["name"]);
    move_uploaded_file($_FILES["foto_profil"]["tmp_name"], $target_file);
}

$sql = "UPDATE `login` SET
        `nama` = '$nama',
        `nik` = '$nik',
        `alamat` = '$alamat',
        `foto_profil` = '$foto_profil'
        WHERE `id` = '$id'";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "
    <script>
        alert('Profil berhasil diupdate');
        window.location.href = 'index.php?id=$id';
    </script>";
} else {
    echo "Profil gagal diupdate: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
