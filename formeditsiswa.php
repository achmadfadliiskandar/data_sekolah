<?php
include 'koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM siswa WHERE id='$id'";
$query = mysqli_query($connect, $sql);
$sis = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1 ) {
    die("data tidak ditemukan");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Form Edit Siswa</title>
  </head>
  <body>
      <div class="container">
    <h1 class="text-center">Form Edit Siswa</h1>
    <form action="editsiswa.php" method="post">
    <input type="hidden" name="id" value="<?php echo $sis['id']?>">
    <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama" value="<?php echo $sis['nama'] ?>" id="nama">
    </div>
    <div class="mb-3">
    <label for="ttl" class="form-label">TTL</label>
    <input type="text" class="form-control" name="ttl" value="<?php echo $sis['ttl'] ?>" id="nama">
    </div>
    <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat" value="<?php echo $sis['alamat'] ?>" id="nama">
    </div>
    <div class="mb-3">
    <label for="foto" class="form-label">Foto</label>
    <input type="text" class="form-control" name="foto" value="<?php echo $sis['foto'] ?>" id="nama">
    </div>
    <div class="mb-3">
    <label for="jurusan" class="form-label">Jurusan</label>
    <input type="text" class="form-control" name="jurusan" value="<?php echo $sis['jurusan'] ?>" id="nama">
    </div>
    <div class="mb-3">
    <label for="keterangan_siswa" class="form-label">Keterangan Siswa</label>
    <input type="text" class="form-control" name="keterangan_siswa" value="<?php echo $sis['keterangan_siswa'] ?>" id="nama">
    </div>
    <div class="mb-3">
    <label for="pembayaran" class="form-label">Pembayaran</label>
    <input type="text" class="form-control" name="pembayaran" value="<?php echo $sis['pembayaran'] ?>" id="nama">
    </div>
    <button type="submit" name="simpansiswa" class="btn btn-success">Edit Data</button>
    </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>