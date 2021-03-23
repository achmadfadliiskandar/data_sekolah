<?php
include 'koneksi.php';

if (isset($_POST['simpansiswa'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $foto = $_POST['foto'];
    $jurusan = $_POST['jurusan'];
    $keterangan_siswa = $_POST['keterangan_siswa'];
    $pembayaran = $_POST['pembayaran'];

$sql = "UPDATE siswa SET nama='$nama', ttl='$ttl', alamat='$alamat',foto='$foto', jurusan='$jurusan', keterangan_siswa='$keterangan_siswa', pembayaran='$pembayaran' WHERE id='$id'";

$query = mysqli_query($connect, $sql);

if ($query) {
    header('Location: tampilsiswa.php');
}else {
    header('Location: editsiswa.php?status=gagal');
}
}
?>