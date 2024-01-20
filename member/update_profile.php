<?php
include '../koneksi.php';

$id = $_POST["id"];

$get_user = "SELECT * FROM login WHERE id = '$id'";
$result_user = mysqli_query($conn, $get_user);
$user_data = mysqli_fetch_assoc($result_user);

$nama = $_POST["nama"] ?? $user_data['nama'];
$nik = $_POST["nik"] ?? $user_data['nik'];
$alamat = $_POST["alamat"] ?? $user_data['alamat'];
$telp = $_POST["telp"] ?? $user_data['telp'];
$foto_profil = $_FILES["foto_profil"]["name"];

if (!empty($_FILES['foto_profil']['name'])) {
    $target_file = "../img/photo/" . basename($_FILES["foto_profil"]["name"]);
    move_uploaded_file($_FILES["foto_profil"]["tmp_name"], $target_file);
    $sql = "UPDATE `login` SET
            `nama` = '$nama',
            `nik` = '$nik',
            `alamat` = '$alamat',
            `telp` = '$telp',
            `foto_profil` = '$foto_profil'
            WHERE `id` = '$id'";
} else {
    $sql = "UPDATE `login` SET
            `nama` = '$nama',
            `nik` = '$nik',
            `alamat` = '$alamat',
            `telp` = '$telp'
            WHERE `id` = '$id'";
}

$result = mysqli_query($conn, $sql);


if ($result) {
    echo "
    <script>
        alert('Profil berhasil diupdate');
        window.location.href = 'index.php';
    </script>";
} else {
    echo "Profil gagal diupdate: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
