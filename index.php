<?php
session_start();
include "connection.php";
$query = "SELECT id_professor,nome,area_formacao FROM professor Limit 4";
$result = $conn->query($query);


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>INFO</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Favicon -->
  <link href="img/logoicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
      <span class="sr-only">7890</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.php">
      <img src="img/logo.png" alt="" width="35%" style="padding-left:10px" />
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="formacoes.php" class="nav-item nav-link">Formações</a>
        <a href="contacto.php" class="nav-item nav-link">Contactos</a>
      </div>
      <a href="signin.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Carousel Start -->
  <div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
      <div class="owl-carousel-item position-relative">
        <img class="img-fluid" src="https://images.pexels.com/photos/247839/pexels-photo-247839.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, 0.7)">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-sm-10 col-lg-8">
                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">
                  Melhores Formações Online
                </h5>
                <h1 class="display-3 text-white animated slideInDown">
                  A melhor plataforma de aprendizagem online
                </h1>
                <p class="fs-5 text-white mb-4 pb-2">
                  Inscreve-te, aprende e profissionaliza-te para o mercado de
                  trabalho
                </p>
                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Ler Mais</a>
                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Candidata-te</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Carousel End -->

  <!-- Service Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
              <h5 class="mb-3">Formações Online</h5>

            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fa fa-3x fa-globe text-primary mb-4"></i>
              <h5 class="mb-3">Workshops Online</h5>

            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fa fa-3x fa-home text-primary mb-4"></i>
              <h5 class="mb-3">Certificado Internacional</h5>

            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
              <h5 class="mb-3">Parceiros</h5>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Service End -->

  <!-- About Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px">
          <div class="position-relative h-100">
            <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover" />
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <h6 class="section-title bg-white text-start text-primary pe-3">
            Sobre nós
          </h6>
          <h1 class="mb-4">Bem-vindos à INFO</h1>
          <p class="mb-4">
            A INFO é uma entidade de formação online e profissional que foi
            criada com o intuito de disponibilizar várias formações em
            diversas áreas numa plataforma online para que cada pessoas possa
            profissionalizar-se num determinado ponto.
          </p>
          <div class="row gy-2 gx-4 mb-4">
            <div class="col-sm-6">
              <p class="mb-0">
                <i class="fa fa-arrow-right text-primary me-2"></i>Programação
              </p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0">
                <i class="fa fa-arrow-right text-primary me-2"></i>Redes e Comunicação
              </p>
            </div>

            <div class="col-sm-6">
              <p class="mb-0">
                <i class="fa fa-arrow-right text-primary me-2"></i>CiberSegurança
              </p>

            </div>
            <div class="col-sm-6">
              <p class="mb-0">
                <i class="fa fa-arrow-right text-primary me-2"></i>Jogos e Multimédia
              </p>

            </div>
            <div class="col-sm-6">
              <p class="mb-0">
                <i class="fa fa-arrow-right text-primary me-2"></i>Design
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
      <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="section-title bg-white text-center text-primary px-3">
            Categorias
          </h6>
          <h1 class="mb-5">Formações em Destaque</h1>
        </div>
        <div class="row g-3">
          <div class="col-lg-7 col-md-6">
            <div class="row g-3">
              <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                <a class="position-relative d-block overflow-hidden" href="">
                  <img class="img-fluid" src="img/cat-1.jpg" alt="" />
                  <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px">
                    <h5 class="m-0">Informática</h5>
                    <small class="text-primary">Duas Formações </small>
                  </div>
                </a>
              </div>
              <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                <a class="position-relative d-block overflow-hidden" href="programação.html">
                  <img class="img-fluid" src="img/cat-2.jpg" alt="" />
                  <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px">
                    <h5 class="m-0">Saúde</h5>
                    <small class="text-primary">Uma Formação</small>
                  </div>
                </a>
              </div>
              <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                <a class="position-relative d-block overflow-hidden" href="formacaogestao.php">
                  <img class="img-fluid" src="img/cat-3.jpg" alt="" />
                  <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px">
                    <h5 class="m-0">Gestão</h5>
                    <small class="text-primary">Uma Formação</small>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px">
            <a class="position-relative d-block h-100 overflow-hidden" href="design.html">
              <img class="img-fluid position-absolute w-100 h-100" src="img/cat-4.jpg" alt="" style="object-fit: cover" />
              <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px">
                <h5 class="m-0">Jogos e Multimédia</h5>
                <small class="text-primary">Duas Formações</small>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Categories Start -->

    <!-- Courses Start -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="section-title bg-white text-center text-primary px-3">
            Formadores
          </h6>
          <h1 class="mb-5">Em Destaque</h1>
        </div>
        <div class="row g-4">
          <?php
          if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) { ?>
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item bg-light">
                  <div class="overflow-hidden">
                    <img class="img-fluid" src="img/team-1.jpg" alt="" />
                  </div>
                  <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
                    <div class="bg-light d-flex justify-content-center pt-2 px-1">
                      <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                      <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                      <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                  </div>
                  <div class="text-center p-4">
                    <h5 class="mb-0"><?= $row['nome'] ?></h5>
                    <small><?= $row['area_formacao'] ?></small>
                  </div>
                </div>
              </div>
          <?php }
          } ?>
        </div>
      </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-3">Principais</h4>
            <a class="btn btn-link" href="index.php">Página Inicial</a>
            <a class="btn btn-link" href="contacto.php">Contactos</a>
            <a class="btn btn-link" href="signin.php">Login</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-3">Contacto</h4>
            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Rua Miguel Torga, Leiria</p>
            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+351 923 021 021</p>
            <p class="mb-2"><i class="fa fa-envelope me-3"></i>INFOphelp@gmail.com</p>
            <div class="d-flex pt-2">
              <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
              <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
              <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-3">Newsletter</h4>
            <p>Se quiser receber novidades sobre as nossas formações e workshops, subscrevam </p>
            <div class="position-relative mx-auto" style="max-width: 400px;">
              <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
              <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Subscrever</button>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- Footer End -->


    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>


<?php

$conn->close();
?>