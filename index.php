<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="stylesheet" href="asset/fa/css/all.css">
    <link rel="stylesheet" href="asset/fa/css/all.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<style>
    /* Ensuring the footer spans the entire width and sticks to the bottom */
    body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }
    footer {
        background-color: black;
        color: white;
        width: 100%;
        position: relative;
        bottom: 0;
        padding: 5px 0;
    }
    footer .container {
        max-width: 100%;
        padding: 0 15px;
    }
    .icon{
      justify-content:space-between;
    }
</style>
<body>
<!-- <nav class="navbar navbar-expand-lg bg-light"> ... (No changes to Navbar) ... -->

<nav class="navbar navbar-expand-lg bg-light sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><b>PORTOFOLIO</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="" class="nav-link" data-bs-toggle="modal" data-bs-target="#biodata">Biodata</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#cv">CV</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#sertifikat">Sertifikat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#kemampuan">Kemampuan</a>
        </li>
        <li class="nav-item">
          <!-- <a class="nav-link" href="#">Contact</a> -->
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="@azharbadri_k" placeholder="@azharbadri_k" aria-label="Search" disabled>
        <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
      </form>
    </div>
  </div>
</nav>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <img src="asset/gambar/com.png" alt="computer" class="img-fluid" height="500">
        </div>
        <div class="col-lg-6"><h4>ABOUT ME</h4>
            <div class="col-md-12">
               <div class="card" style="background-color: #F8F9FA; box-shadow: 0 0 80px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);">
                <div class="card-body">
                    <p class="card-text">
                    <i>Saya AZHAR BADRI KAUTSAR lulusan dari UNIVERSITAS HARAPAN MEDAN jurusan TEKNIK INFORMATIKA dengan IPK 3.56.
                        Saya mampu mengoperasikan komputer, suka bekerja keras, mempelajari hal-hal baru dan dapat bekerja secara individu maupun tim.
                        Saya menguasai bahasa pemrograman PHP, HTML, Javascript, Framework Bootstrap, Framework Laravel, Microsoft Office, Adobe Photoshop dan Figma. Saya juga berpengalaman sebagai freelancer dalam pembuatan website dan desain grafis.
                    </i>
                    </p>
                    <a href="" data-bs-toggle="modal" data-bs-target="#cv" class="btn btn-primary btn-sm">Curriculum Vitae <span class="fa fa-book"></span></a>
                </div>
               </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousoul -->
<!-- <div class="container ">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row">
          <div class="col-md-2">
            <img src="asset/icon/adobe.png" class="img-fluid d-block w-25" alt="...">
          </div>
          <div class="col-md-2">
            <img src="asset/icon/chat-gpt.png" class="img-fluid d-block w-25" alt="...">
          </div>
          <div class="col-md-2">
            <img src="asset/icon/figma.png" class="img-fluid d-block w-25" alt="...">
          </div>
          <div class="col-md-2">
            <img src="asset/icon/file.png" class="img-fluid d-block w-25" alt="...">
          </div>
          <div class="col-md-2">
            <img src="asset/icon/html-5.png" class="img-fluid d-block w-25" alt="...">
          </div>
          <div class="col-md-2">
            <img src="asset/icon/js.png" class="img-fluid d-block w-25" alt="...">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-md-2">
            <img src="asset/icon/science.png" class="img-fluid d-block w-25" alt="...">
          </div>
          <div class="col-md-2">
            <img src="asset/icon/media.png" class="img-fluid d-block w-25" alt="...">
          </div>
          <div class="col-md-2">
            <img src="asset/icon/medium.png" class="img-fluid d-block w-25" alt="...">
          </div>
          <div class="col-md-2">
            <img src="asset/icon/logo.png" class="img-fluid d-block w-25" alt="...">
          </div>
          <div class="col-md-2">
            <img src="asset/icon/powerpoint.png" class="img-fluid d-block w-25" alt="...">
          </div>
          <div class="col-md-2">
            <img src="asset/icon/word.png" class="img-fluid d-block w-25" alt="...">
          </div>
        </div>
      </div>
    </div>
  </div>

</div> -->
<div class="container my-4 mt-5">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row text-center">
            <div class="col-2 col-sm-2 col-md-2">
              <img src="asset/icon/adobe.png" class="img-fluid w-50" alt="Adobe">
            </div>
            <div class="col-2 col-sm-2 col-md-2">
              <img src="asset/icon/chat-gpt.png" class="img-fluid w-50" alt="ChatGPT">
            </div>
            <div class="col-2 col-sm-2 col-md-2">
              <img src="asset/icon/figma.png" class="img-fluid w-50" alt="Figma">
            </div>
            <div class="col-2 col-sm-2 col-md-2">
              <img src="asset/icon/file.png" class="img-fluid w-50" alt="File">
            </div>
            <div class="col-2 col-sm-2 col-md-2">
              <img src="asset/icon/html-5.png" class="img-fluid w-50" alt="HTML5">
            </div>
            <div class="col-2 col-sm-2 col-md-2">
              <img src="asset/icon/js.png" class="img-fluid w-50" alt="JavaScript">
            </div>
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row text-center">
            <div class="col-2 col-sm-2 col-md-2">
              <img src="asset/icon/science.png" class="img-fluid w-50" alt="Science">
            </div>
            <div class="col-2 col-sm-2 col-md-2">
              <img src="asset/icon/media.png" class="img-fluid w-50" alt="Media">
            </div>
            <div class="col-2 col-sm-2 col-md-2">
              <img src="asset/icon/medium.png" class="img-fluid w-50" alt="Medium">
            </div>
            <div class="col-2 col-sm-2 col-md-2">
              <img src="asset/icon/logo.png" class="img-fluid w-50" alt="Logo">
            </div>
            <div class="col-2 col-sm-2 col-md-2">
              <img src="asset/icon/powerpoint.png" class="img-fluid w-50" alt="PowerPoint">
            </div>
            <div class="col-2 col-sm-2 col-md-2">
              <img src="asset/icon/word.png" class="img-fluid w-50" alt="Word">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 <!-- End Carousoul -->
<!-- Skills Section -->
<div class="container mt-5">
  <div class="card col-12" style="background: radial-gradient(100% 100% at 100% 0%, #2CC8F7 0%, #5172FF 100%); border:none;">
    <div class="card-title text-white mt-2"><center><h5>My Skill</h5></center></div>
  </div>
</div>

<div class="container text-white mt-3">
    <div class="row py-5">
        <div class="col-lg-3 lg-mb-0 mb-5">
            <div class="card" style="background:#336AEA; border:none; border-radius: 30px;">
                <div class="card-body">
                  <center><h5>Website Apps</h5>
                    <img src="asset/gambar/web.png" alt="web" width="180" height="180">
                  </center>
                </div>
                <div class="card-footer"><center><a href="website.php" class="btn btn-light btn-sm" style="border-radius:10px;">View Detail <span class="fa fa-arrow-alt-circle-right"></span></a> </center></div>
            </div>
        </div>
        <div class="col-lg-3 lg-mb-0 mb-5">
            <div class="card" style="background:#6569BD; border:none; border-radius: 30px;">
                <div class="card-body">
                <center><h5>Photoshop Design</h5>
                    <img src="asset/gambar/shop.png" alt="web" width="180" height="180">
                </center>
                </div>
                <div class="card-footer"><center><a href="potoshop.php" class="btn btn-light btn-sm" style="border-radius:10px;">View Detail <span class="fa fa-arrow-alt-circle-right"></span></a></center></div>
            </div>
        </div>
        <div class="col-lg-3 lg-mb-0 mb-5">
            <div class="card" style="background:#44B678; border:none; border-radius: 30px;">
                <div class="card-body">
                  <center><h5>Augmented Reality</h5>
                    <img src="asset/gambar/and.png" alt="web" width="180" height="180">
                  </center>
                </div>
                <div class="card-footer"><center><a href="" data-bs-toggle="modal" data-bs-target="#augmented"  class="btn btn-light btn-sm" style="border-radius:10px;">View <span class="fa fa-search"></span></a></center></div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card" style="background:#A8A8A8; border:none; border-radius: 30px;">
                <div class="card-body">
                  <center><h5>Figma</h5>
                    <img src="asset/gambar/fidelity.png" alt="web" width="170" height="180">
                  </center>
                </div>
                <div class="card-footer"><center><button type="button" class="btn btn-light btn-sm" style="border-radius:10px;" disabled>View <span class="fa fa-search"></span></button></center></div>
            </div>
        </div>
    </div>
</div>

<div class="container">
  <div class="col-12">
    <div class="card-title text-muted"><center><h4>Website Apps</h4></center></div>
  </div>
</div>
<div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card p-3" style=" border:none;">
          <div class="row">
            <div class="col-lg-6">
              <img src="asset/gambar/moni.png" alt="bg" class="img-fluid" height="300">
            </div>
            <div class="col-lg-6">
              <p class="text-muted">Saya pernah Magang Di Dinas Kominfo Deli Serdang, di mana saya ikut andil dalam merancang website untuk Dinas Kominfo Deli Serdang tersebut. Dalam proyek ini, saya terlibat dalam pengembangan aspek frontend dan backend, 
                merancang antarmuka pengguna yang menarik serta mengelola sistem database untuk memastikan informasi selalu terkini.
                Jika Anda ingin mengakses website tersebut, Anda bisa mengklik tombol "Kunjungi Website" di bawah ini.</p>
                <br><a href="https://www.mesramediacendekia.sch.id/" class="btn btn-sm btn-primary">Kunjungi Website <span class="fa fa-arrow-alt-circle-right"></span></a>
            </div>
          </div>
        </div>
      <div class="col-12">
        <div class="card-title text-muted"><span class=""><center><h4>Photoshop Design</h4></center></span></div>
      </div>
      <div class="card p-3" style=" border:none;">
        <div class="row">
          <div class="col-lg-6">
            <p class="text-muted">Saya menyukai desain karena memungkinkan saya mengekspresikan kreativitas dan menggabungkan estetika visual dengan fungsi. Proses ini juga memberikan kepuasan saat ide-ide saya diterima dengan baik oleh pengguna.
               Desain memungkinkan saya berkomunikasi secara efektif dan memahami kebutuhan audiens, menjadikannya pengalaman yang selalu menarik dan bermanfaat.</p>
              <!-- <br><a href="" class="btn btn-sm btn-primary">Lihat Website</a> -->
          </div>
          <div class="col-lg-6">
            <img src="asset/gambar/ps.png" alt="bg" class="img-fluid" height="300"  style="">
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="card-title text-muted"><span class=""><center><h4>Augmented Reality</h4></center></span></div>
      </div>
      <div class="card p-3" style=" border:none;">
        <div class="row">
          <div class="col-lg-6">
            <img src="asset/gambar/aug.png" alt="bg" class="img-fluid" height="300"  style="">
          </div>
          <div class="col-lg-6">
            <p class="text-muted">Saya pernah membuat sebuah Aplikasi Gitar Elektrik Stratocaster dengan Pickup Single Coil Berbasis Android, aplikasi ini saya buat untuk menyelesaikan tugas akhir saat di Universitas Harapan Medan.
              Dengan aplikasi ini, pengguna dapat dengan mudah mempelajari berbagai komponen yang ada pada gitar elektrik stratocaster dengan pickup single coil, 
              memperkaya pengetahuan mereka secara efektif. Aplikasi ini tidak hanya memungkinkan pengguna untuk mengakses informasi tentang gitar elektrik stratocaster dengan pickup single coil, 
              tetapi juga menghasilkan model 3D real-time tanpa adanya gangguan atau keterlambatan.
              Untuk cara penggunaan lebih lanjut, kamu bisa klik link "Unduh Aplikasi AR" di bawah ini.</p>
              <br><a href="" class="btn btn-sm btn-primary"> Unduh Aplikasi AR <span class="fa fa-download"></span></a>
              <a href="" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#marker"> Scan Marker <span class="fa fa-book"></span></a>
          </div>
        </div>
      </div>
    </div>
    </div>
</div>
<!-- Skill -->
<div class="container mt-5">
  <div class="col-12">
    <div class="card-title text-muted" id="kemampuan"><center><h4>Kemampuan</h4></center></div>
  </div>
</div>
<div class="container my-5">
  <div class="row">
    <div class="card" style="box-shadow: 1px 0px 5px #B5B5B5; border:none;">
      <div class="card-body">
        <!-- Flex container yang responsif -->
        <div class="d-flex flex-wrap justify-content-start bd-highlight mb-3">
          <div class="p-2 bd-highlight me-3 mb-2 bg-primary text-white text-center" style="border-radius:10px; min-width:100px;">UI/UX Design</div>
          <div class="p-2 bd-highlight me-3 mb-2 bg-primary text-white text-center" style="border-radius:10px; min-width:100px;">Figma</div>
          <div class="p-2 bd-highlight me-3 mb-2 bg-primary text-white text-center" style="border-radius:10px; min-width:100px;">HTML</div>
          <div class="p-2 bd-highlight me-3 mb-2 bg-primary text-white text-center" style="border-radius:10px; min-width:100px;">PHP</div>
          <div class="p-2 bd-highlight me-3 mb-2 bg-primary text-white text-center" style="border-radius:10px; min-width:100px;">Bootstrap</div>
          <div class="p-2 bd-highlight me-3 mb-2 bg-primary text-white text-center" style="border-radius:10px; min-width:100px;">Laravel</div>
          <div class="p-2 bd-highlight me-3 mb-2 bg-primary text-white text-center" style="border-radius:10px; min-width:100px;">CSS</div>
          <div class="p-2 bd-highlight me-3 mb-2 bg-primary text-white text-center" style="border-radius:10px; min-width:100px;">JavaScript</div>
          <div class="p-2 bd-highlight me-3 mb-2 bg-primary text-white text-center" style="border-radius:10px; min-width:100px;">React JS</div>
          <div class="p-2 bd-highlight me-3 mb-2 bg-primary text-white text-center" style="border-radius:10px; min-width:100px;">SQL</div>
          <div class="p-2 bd-highlight me-3 mb-2 bg-primary text-white text-center" style="border-radius:10px; min-width:100px;">Photoshop</div>
          <div class="p-2 bd-highlight me-3 mb-2 bg-primary text-white text-center" style="border-radius:10px; min-width:100px;">Word</div>
          <div class="p-2 bd-highlight me-3 mb-2 bg-primary text-white text-center" style="border-radius:10px; min-width:100px;">Excel</div>
          <div class="p-2 bd-highlight me-3 mb-2 bg-primary text-white text-center" style="border-radius:10px; min-width:100px;">Power PowerPoint</div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End SKill -->
<!-- Experience -->
<div class="container mt-4">
  <div class="col-12">
    <div class="card-title text-muted"><center><h4>Pengalaman</h4></center></div>
  </div>
</div>
<div class="container my-5">
  <div class="row">
    <div class="col-6">
      <h5>Frontend Developer</h5>
    </div>
    <div class="col-6 text-end">
      <h5>Magang Di Dinas Kominfo Deli Serdang</h5>
      <p>Oktober 2023 - Desember 2023</p>
    </div>
    <hr>
    <div class="col-6">
      <h5>Admin Logistic</h5>
    </div>
    <div class="col-6 text-end">
      <h5>PT. Lion Parcel</h5>
      <p>Juli 2022 - Mei 2023</p>
    </div>
    <hr>
    <div class="col-6">
      <h5>Teknisi CCTV</h5>
    </div>
    <div class="col-6 text-end">
      <h5>CV. Istana CCTV</h5>
      <p>Agustus 2020 - Januari 2021</p>
    </div>
    <hr>
    <div class="col-6">
      <h5>Teknisi Wifi</h5>
    </div>
    <div class="col-6 text-end">
      <h5>PT. Telekomunikasi Indonesia</h5>
      <p>September 2019 - Juli 2020</p>
    </div>
    <hr>
  </div>
</div>
<!--  -->

<!-- footer -->
<footer>
  <div class="container">
    <div class="text-center p-3">
      © 2023 Copyright: 
      <a class="text-body" href="" style="color: white;"></a><span>azharbadri02@gmail.com</span><br>
      <span class="icon">
        <img src="asset/gambar/whatsapp.png" class="mx-2 mt-3" alt="whatsapp" width="23" height="23">
        <img src="asset/gambar/instagram.png" class="mx-2 mt-3" alt="whatsapp" width="23" height="23">
        <img src="asset/gambar/facebook.png" class="mx-2 mt-3" alt="whatsapp" width="23" height="23">
        <img src="asset/gambar/youtube.png" class="mx-2 mt-3" alt="whatsapp" width="23" height="23">
        <img src="asset/gambar/linkedin.png" class="mx-2 mt-3" alt="whatsapp" width="23" height="23">
      </span>
    </div>
  </div>
</footer>
<!-- end footer -->
<script src="asset/js/jquery.js"></script>
<script src="asset/js/bootstrap.js"></script>

<!-- modal BIODATA -->
<div class="modal fade modal-lg" id="biodata" tabindex="-1" aria-labelledby="biodata" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="biodata"><b>Biodata</b></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="">
        <img src="asset/gambar/ftwis4.png" class="img-thumbnail" alt="foto" width="100" height="120"><br>
          <!-- <h5>Info Biodata</h5> -->
          <li><b>Nama :</b> Azhar Badri Kautsar</li>
          <!-- <li><b>Contact :</b>  0822 7314 1039 </li>
          <li><b>E-mail :</b> azharbadri02@gmail.com</li> -->
          <li><b>Tempat Tanggal Lahir :</b>  Medan, 5 Juli 2001</li><br>
          <h5>Data Pendidikan</h5>
          <li><b>Sekolah</b> SMK Tritech Informatika Medan (Rekayasa Perangkat Lunak)</li>
          <li><b>Universitas</b> Universitas Harapan Medan (Teknik Informatika)</li><br>
          <h5>Team Support</h5>
          <div class="row">
            <div class ="col-md-4 mb-2 mb-md-2">
              <img src="asset/gambar/foto.jpeg" alt="foto" class="img-fluid h-80">
            </div>
            <div class ="col-md-4 mb-2 mb-md-0">
              <img src="asset/gambar/foto6.jpg" alt="foto" class="w-100 h-80">
            </div>
            <div class ="col-md-4 mb-2 mb-md-0">
              <img src="asset/gambar/foto7.jpg" alt="foto" class="w-100 h-80">
            </div>
            <!-- <div class ="col-md-4 mb-2 mb-md-0">
              <img src="asset/gambar/foto5.jpeg" alt="foto" class="w-100 h-80">
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end BIODATA-->

 <!-- modal CV -->
<div class="modal fade" id="cv" tabindex="-1" aria-labelledby="cv" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="cv"><b>Curriculum Vitae</b></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!-- <img src="asset/gambar/CV.jpg" alt="foto" width="450" height="700"> -->
       <iframe src="asset/gambar/CV.pdf" frameborder="0" width="460" height="400"></iframe>
      </div>
    </div>
  </div>
</div>
<!-- end CV-->
 <!-- modal Sertifikat -->
<div class="modal fade modal-lg" id="sertifikat" tabindex="-1" aria-labelledby="sertifikat" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="cv"><b>Sertifikat</b></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <h5>Sertifikat 1</h5>  
            <div class="overlay">
              <img src="asset/gambar/ser1.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <div class="carousel-item">
            <h5>Sertifikat 2</h5>    
            <div class="overlay">
              <img src="asset/gambar/ser4.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <div class="carousel-item">
            <h5>Sertifikat 3</h5>
            <div class="overlay">
              <img src="asset/gambar/ser3.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>      
            </div>
          </div>
        </div>
      </div>
<!-- end Sertifikat-->

<!-- Modal Augmented -->
<div class="modal fade" id="augmented" tabindex="-1" aria-labelledby="cv" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><b>Augmented Reality Android</b></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row g-3">
          <div class="col-6 col-sm-4 col-md-3">
            <img src="asset/ss/ss1.jpg" alt="foto" class="img-fluid">
          </div>
          <div class="col-6 col-sm-4 col-md-3">
            <img src="asset/ss/ss2.jpg" alt="foto" class="img-fluid">
          </div>
          <div class="col-6 col-sm-4 col-md-3">
            <img src="asset/ss/ss3.jpg" alt="foto" class="img-fluid">
          </div>
          <div class="col-6 col-sm-4 col-md-3">
            <img src="asset/ss/ss4.jpg" alt="foto" class="img-fluid">
          </div>
        </div>
        <div class="mt-3">
          <p>
            Hasil di atas merupakan tampilan setelah melakukan scan terhadap marker.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end Augmented -->
<!-- Modal Scan Marker -->
<div class="modal fade" id="marker" tabindex="-1" aria-labelledby="marker" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><b>Scan Marker</b></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row g-3">
          <div class="col-6 col-sm-4 col-md-3">
            <img src="asset/ss/m1.png" alt="foto" class="img-fluid">
          </div>
          <div class="col-6 col-sm-4 col-md-3">
            <img src="asset/ss/m13.png" alt="foto" class="img-fluid">
          </div>
          <div class="col-6 col-sm-4 col-md-3">
            <img src="asset/ss/m2.png" alt="foto" class="img-fluid">
          </div>
          <div class="col-6 col-sm-4 col-md-3">
            <img src="asset/ss/m3.png" alt="foto" class="img-fluid">
          </div>
        </div>
        <p>Silalahkan scan per satu gambar untuk melihat hasil 3D augmented reality  </p>
      </div>
    </div>
  </div>
</div>

<!-- end Scan Marker -->
</body>
</html>
