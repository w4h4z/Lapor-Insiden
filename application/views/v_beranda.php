<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Lapor Insiden</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>assets/beranda/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url(); ?>assets/beranda/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>assets/beranda/css/grayscale.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Lapor Insiden</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">Alur</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#signup">Hubungi Kami</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">Lapor Insiden</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Laporkan insiden yang anda alami dan akan kami tangani dengan cepat</h2>
        <button class="btn btn-primary" data-toggle="modal" data-target="#login">Lapor Insiden</button>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">Apa itu Lapor Insiden?</h2>
          <p class="text-white-50">Lapor Insiden adalah sebuah website dari 
            <a href="https://bssn.go.id" target="blank">Badan Siber dan Sandi Negara</a> yang digunakan untuk melaporkan kejadian insiden keamanan siber, kerentanan, phising, indikator serangan, malware dan konten negatif.</p>
        </div>
      </div>
      <img src="<?php base_url(); ?>assets/beranda/images/2.jpeg" class="img-fluid" alt="" style="max-width: 50%">
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects-section bg-light">
    <div class="container">

      <!-- Featured Project Row -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-8 col-lg-7">
          <img class="img-fluid mb-3 mb-lg-0" src="<?php base_url(); ?>assets/beranda/images/masalah.jpg" alt="" style="width: 100%">
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>Laporkan Masalah</h4>
            <p class="text-black-50 mb-0">Laporkan masalah yang terjadi dan ceritakan kepada kami apa yang terjadi.</p>
          </div>
        </div>
      </div>

      <!-- Project One Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <img class="img-fluid" src="<?php base_url(); ?>assets/beranda/images/analisis.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">Tunggu Analisis Dari Kami</h4>
                <p class="mb-0 text-white-50">Tim professional kami akan segera menganalisis masalah anda dengan cepat dan tepat.</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" src="<?php base_url(); ?>assets/beranda/images/solusi2.jpg" alt="">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white">Dapatkan Solusi</h4>
                <p class="mb-0 text-white-50">Dapatkan solusi dari kami yang akan berguna dan membantu masalah anda.</p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section bg-black" id="signup">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Alamat</h4>
              <hr class="my-4">
              <div class="small text-black-50">Jl. Harsono RM 70 Ragunan, Pasar Minggu, Jakarta Selatan, 12550</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="#">humas@bssn.go.id</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Telepon</h4>
              <hr class="my-4">
              <div class="small text-black-50">+62217805814</div>
            </div>
          </div>
        </div>
      </div>

      <div class="social d-flex justify-content-center">
        <a href="https://twitter.com/bssn_ri" target="blank" class="mx-2">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.facebook.com/badansiberdansandinegara/" target="blank" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://www.instagram.com/bssn_ri/" target="blank" class="mx-2">
          <i class="fab fa-instagram"></i>
        </a>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Lapor Insiden 2019
    </div>
  </footer>

  <!-- Modal -->

  <div class="modal" tabindex="-1" role="dialog" id="login">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Daftar/Masuk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Daftar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Masuk</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <p>
              <form>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-12 col-form-label">Nama</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" id="inputNama" placeholder="Nama">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-12 col-form-label">No Telepon</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" id="inputTelepon" placeholder="No Telepon">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-12 col-form-label">No Identitas(SIM/KTP)</label>
                  <div class="col-sm-12">
                    <input type="number" class="form-control" id="inputId" placeholder="No Identitas">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-12 col-form-label">Email</label>
                  <div class="col-sm-12">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-12 col-form-label">Password</label>
                  <div class="col-sm-12">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <button type="submit" class="btn btn-danger btn-block">Batal</button>
                  </div>
                  <div class="col-sm-6">
                    <button type="submit" class="btn btn-info btn-block">Daftar</button>
                  </div>
                </div>
              </form>
            </p>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <p>
            <form method="post" action="<?php echo base_url('beranda/login'); ?>">
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-12 col-form-label">Email</label>
                <div class="col-sm-12">
                  <input type="email" class="form-control" name="emailMasuk" id="inputEmailMasuk" placeholder="Email">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-12 col-form-label">Password</label>
                <div class="col-sm-12">
                  <input type="password" class="form-control" name="passwordMasuk" id="inputPasswordMasuk" placeholder="Password">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6">
                  <button type="reset" class="btn btn-danger btn-block">Batal</button>
                </div>
                <div class="col-sm-6">
                  <button type="submit" class="btn btn-info btn-block">Masuk</button>
                </div>
              </div>
            </form>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url(); ?>assets/beranda/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/beranda/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url(); ?>assets/beranda/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url(); ?>assets/beranda/js/grayscale.min.js"></script>

</body>

</html>
