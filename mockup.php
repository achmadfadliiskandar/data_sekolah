<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>WEB SCHOOL INDONESIA</title>
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
<div class="container">
    <a class="navbar-brand" href="#">SCHOOL INDONESIA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
        <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Galeri</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
        </li>
    </ul>
    </div>
</div>
</nav>
<!-- end navbar -->

<!-- photo -->
<section id="home" class="home">
<h2 class="text-center text-danger" style="font-size:59px;text-transform:uppercase;" id="p1">Welcome To School Indonesia</h2>
<center>
<a href="#about"  class="btn btn-danger">About</a>
</center>
</section>
<!-- end photo -->

<!-- about -->
<section id="about" class="about pt-3 pb-3">
    <div class="container">
<h2 class="text-center">About</h2>
<div class="row">
    <div class="col-sm-6">
Sekolah adalah lembaga untuk para siswa pengajaran siswa/murid di bawah pengawasan guru
Sebagian besar negara memiliki sistem pendidikan formal yang umumnya wajib. Dalam sistem ini, siswa mengalami kemajuan melalui serangkaian kegiatan belajar mengajar di sekolah. Nama-nama untuk untuk sekolah ini bervariasi menurut negara (dibahas pada bagian Daerah di bawah), tetapi umumnya termasuk sekolah dasar untuk anak-anak muda dan sekolah menengah untuk remaja yang telah menyelesaikan pendidikan dasar.
    </div>
<div class="col-sm-6">
Kata sekolah berasal dari Bahasa Latin: skhole, scola, scolae atau skhola yang memiliki arti: waktu luang atau waktu senggang, di mana ketika itu sekolah adalah kegiatan di waktu luang bagi anak-anak di tengah-tengah kegiatan utama mereka, yaitu bermain dan menghabiskan waktu untuk menikmati  masa anak-anak dan remaja. Kegiatan dalam waktu luang itu adalah mempelajari cara berhitung, cara membaca huruf dan mengenal tentang moral (budi pekerti) dan estetika (seni)
</div>
</div>
</div>
</section>
<!-- end about -->

<!-- galery -->
<section class="galeri bg-light pt-3 pb-5" id="galeri">
<div class="container">
<h2 class="text-center">Galeri</h2>
<p class="text-center">Photo-photo yang  prestasi di sekolah ini </p>
<div class="row text-center">
    <div class="col-md-4">
        <img src="https://www.guinnessworldrecords.com/Images/Record-Certificate-Tile-760-x-444_tcm25-483507.jpg" alt="img" style="width:100%;">
    </div>
    <div class="col-md-4">
    <img src="https://images.bisnis-cdn.com/thumb/posts/2019/03/21/902646/sekolah-jepang-1_210319.jpg?w=600&h=400" alt="img2" style="width:100%;height:208px;">
    </div>
    <div class="col-md-4">
        <img src="https://image-cdn.medkomtek.com/SXwRwf3RzsGv-kzP39f4jCgmng0=/673x373/smart/klikdokter-media-buckets/medias/2318722/original/001812900_1599537937-Penyebab-Virus-Corona-shutterstock_1682648152.jpg" alt="img3" style="width:100%;height:208px;">
    </div>
</div>
<div class="row text-center mt-3">
    <div class="col-md-4">
        <img src="https://uprint.id/blog/wp-content/uploads/2017/03/5-1-1024x640.png" alt="img4" style="width:100%;height:208px;">
    </div>
    <div class="col-md-4">
        <img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1604549706/oytqhbxspuc29v5iiu0q.jpg" alt="img5" style="width:100%;height:208px;">
    </div>
    <div class="col-md-4">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQje1qZPnmqlmjxNNDxwIcPisBkLs0SCG1Log&usqp=CAU" alt="img6" style="width:100%;height:208px;">
    </div>
</div>
</div>
</section>
<!-- end galery -->

<!-- contact -->
<section id="contact" class="contact">
    <div class="container">
<h2 class="text-center pt-3">Contact</h2>
<p class="text-center">kalau berminat bisa langsung daftar di bawah ini</p>
<div class="row">
    <div class="col-sm-6">
    <form  method="POST" action="simpanmockup.php">
<div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama">
</div>
<div class="mb-3">
    <label for="ttl" class="form-label">Ttl</label>
    <input type="text" class="form-control" id="ttl" name="ttl">
</div>
<div class="mb-3">
    <label for="foto" class="form-label">Foto</label>
    <input type="text" class="form-control" id="foto" name="foto">
</div>
<div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat">
</div>
<div class="mb-3">
<label for="">Jurusan</label>
<select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
<option value="RPL">RPL</option>
<option value="TKJ">TJK</option>
<option value="MM">MM</option>
<option value="TEI">TEI</option>
<option value="BRODCAST">BRODCAST</option>
</select>
</div>
<div class="mb-3">
<label for="keterangan_siswa" class="form-label">Keterangan Siswa</label>
<div class="form-floating">
<textarea class="form-control" placeholder="Leave a comment here" id="keterangan_siswa" name="keterangan_siswa" style="height: 100px"></textarea>
</div>
<div class="mb-3">
<label for="pembayaran" class="form-label">Pembayaran</label>
<input type="text" class="form-control" id="pembayaran" value="500000" readonly>
</div>
</div>
<button type="submit" name="simpanmockup" class="btn btn-primary">Submit</button>
</form>
    </div>
    <div class="col-sm-6 mt-4 text-center">
    <i class="fa fa-whatsapp" style="font-size:48px;color:green;"></i>
    <a href="https://api.whatsapp.com/send?phone=6287744455279&text=Saya Ingin DAftar sekolah di school indonesia." class="btn btn-success mb-4">Chat Admin Di Whats App</a>
    <i class="fa fa-telegram" style="font-size:48px;color:lightskyblue;"></i>
    <a href="https://core.telegram.org/" class="text-center btn btn-info mb-4">Chat admin di Telegram</a>
    <i class="fa fa-instagram" style="font-size:48px;color:red"></i>
    <a href="https://www.instagram.com/17achmadfadliiskandar/" class="btn btn-dark mb-4">Follow Ig Admin</a>
    </div>
</div>
</div>
</section>
<!-- end contact -->

<!-- footer -->
<footer class="bg-danger text-light text-center mt-3" style="height:100px;">
    <p class="pt-4">Copyright &copy; WEB SCHOOL INDONESIA</p>
</footer>
<!-- end footer -->

<style>
.home{
    background-image:url("https://sekolah-kesatuan.sch.id/wp-content/uploads/2020/03/home_slider_gedung-SD.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    height:300px;
}
#p1{
    padding-top:120px;
}
@media only screen and (max-width: 600px) {
  #p1 {
    padding-top:20px;
  }
}
</style>

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