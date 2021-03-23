<?php
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Table Siswa</title>
  </head>
  <body>
      <div class="container">
    <h1 class="text-center">Data2 calon siswa</h1>
    <!-- <a href="tambahsiswa.php" class="btn btn-primary">Tambah Data Siswa</a> -->
    </div>
    <!-- tampilkan semua data melalui php -->
<?php
$sql = "SELECT * FROM siswa";

$query = mysqli_query($connect , $sql);

    echo "<div class='container'>";
       echo "<div class='row'>";
       while ($sis = mysqli_fetch_array($query)) {
        echo "<div class='col-lg-2 col-md-12 mt-4'>";
        echo "<div class='card' style='width: 100%;'>";
        echo "<img src='". $sis['foto']."' class='card-img-top' alt=''>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>".$sis['nama']."</h5>";
        echo "<h6 class='card-text'>".$sis['ttl']."</h6>";
        echo "<p class='card-text'>alamat : ".$sis['alamat']."</p>";
        echo "<p class='card-text'>jurusan : ".$sis['jurusan']."</p>";
        // echo "<p class='card-text'>keterangan_siswa : ".$sis['keterangan_siswa']."</p>";
        echo "<p class='card-text'>pembayaran : ".$sis['pembayaran']."</p>";
        // echo "<a class='btn btn-success' href='formeditsiswa.php?id=".$sis['id']."'>Edit</a> ";
        // echo "<a class='btn btn-danger'  href='hapussiswa.php?id=".$sis['id']."'>Hapus</a>";
        // echo "<a class='btn btn-info my-3' href='detaildatasiswa.php?id=".$sis['id']."'>Detail</a>";
        echo "</div>";
        echo "</div>";
        echo"</div>";
    }
?>
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