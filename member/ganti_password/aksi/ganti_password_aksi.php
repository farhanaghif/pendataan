<?php
include '../../../koneksi.php';

$id = $_POST["id"];

$password_lama = $_POST["password_lama"];
$password_baru = $_POST["password_baru"];
$ulang_password_baru = $_POST["ulang_password_baru"];

$sql = "SELECT * FROM login WHERE id = $id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $password = $row['password'];
    if ($password == $password_baru) {
        echo "
        <script>
            alert('Password tidak boleh sama dengan yang sebelumnya');
            window.location.href = '../../index.php';
        </script>";
        exit;
    } elseif ($password != $password_lama) {
        echo "
        <script>
            alert('Password lama tidak valid');
            window.location.href = '../../index.php';
        </script>";
    } elseif ($password_baru != $ulang_password_baru) {
        echo "
        <script>
            alert('Password baru tidak valid dengan password konfirmasi ulang');
            window.location.href = '../../index.php';
        </script>";
    } else {
        $sql = "UPDATE `login` SET
        `password` = '$password_baru'
        WHERE `id` = '$id'";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "
            <script>
                alert('Password berhasil diupdate');
                window.location.href = '../../index.php';
            </script>";
        } else {
            echo "Password gagal diupdate: " . mysqli_error($conn);
        }
    }
} else {
    echo "Password gagal diupdate: " . mysqli_error($conn);
}

mysqli_close($conn);
