<?php
include 'koneksi.php';

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row_count = mysqli_num_rows($result);
    if ($row_count == 1) {
        $user_data = mysqli_fetch_assoc($result);
        if ($user_data['status_verifikasi'] == 0) {
            echo "
            <script>
                alert('Harap verifikasi akun terlebih dahulu');
                window.location.href = 'login.php';
            </script>";
        } else {
            session_start();
            $_SESSION['role'] = $user_data['role'];
            $_SESSION['id'] = $user_data['id'];
            $role = $user_data['role'] == 'admin'
                ? 'admin/index.php'
                : 'member/index.php';
            if ($user_data['role'] == 'admin') {
                header("Location: $role");
            } else {
                header("Location: $role");
            }
        }
    } else {
        echo "
        <script>
            alert('Username atau password tidak valid');
            window.location.href = 'login.php';
        </script>";
    }
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
