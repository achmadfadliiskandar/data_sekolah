<?php
include 'koneksi.php';

if (isset($_POST['simpanmockup'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $foto = $_POST['foto'];
    $jurusan = $_POST['jurusan'];
    $keterangan_siswa = $_POST['keterangan_siswa'];
    $pembayaran = $_POST['pembayaran'];

    $sql = "INSERT INTO siswa(id,nama,ttl,alamat,foto,jurusan,keterangan_siswa,pembayaran) VALUES ('$id','$nama','$ttl','$alamat','$foto','$jurusan','$keterangan_siswa','$pembayaran')";

    $query = mysqli_query($connect, $sql);

    // koneksi jika berhasil
    if ($query) {
    header('Location:mockup.php');
    }else{
        header('Location:simpansiswa.php?status=gagal');
    }
}
?>