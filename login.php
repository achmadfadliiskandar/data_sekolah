<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($connect,"SELECT * FROM users WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($result);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($result);

    $_SESSION['username'] = $username;
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['status'] = "sudahlogin";
    $_SESSION['id_login'] = $data['id'];
    header("Location:halaman_admin.php");
}else {
    header('Location:tampilanadmin.php?datagagal');
}
?>