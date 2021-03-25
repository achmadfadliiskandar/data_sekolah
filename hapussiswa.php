<?php
include 'koneksi.php';
if (isset($_GET['id'])){
    header('Location: tampilsiswa.php');
}

$id = $_GET['id'];

$sql = "DELETE FROM siswa WHERE id='$id'";
$query = mysqli_query($connect, $sql);

if ($query) {
    header('Location:halaman_admin.php');
}else {
    header('Location:hapussiwa.php?status=gagal');
}
?>
