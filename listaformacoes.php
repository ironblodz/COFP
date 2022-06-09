<?php
session_start();
include "connection.php";
$query = "SELECT id_formacao,nome,data_formacao,duracao,descricao,categoria FROM formacao ";
$result = $conn->query($query);



?>









<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
    <meta charset="utf-8">
    <title>Formulário</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logoicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

<body>

  <!-- Spinner Start -->
  <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
      <a href="index.html">
          <img  src="img/logo.png" alt="" width="35%" style="padding-left:10px"/>
      </a>
    <button
      type="button"
      class="navbar-toggler me-4"
      data-bs-toggle="collapse"
      data-bs-target="#navbarCollapse"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="formacoes.php" class="nav-item nav-link">Formações</a>
        <a href="workshops.php" class="nav-item nav-link">Workshops online</a>
        <a href="formulario.php" class="nav-item nav-link">Candidaturas</a>
        <a href="contacto.php" class="nav-item nav-link">Contactos</a>
        <a href="faq.html" class="nav-item nav-link">FAQ</a>
      </div>
      <a href="login.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block"
        >Login<i class="fa fa-arrow-right ms-3"></i
      ></a>
    </div>
  </nav>
    <!-- Navbar End -->

       <!-- Header Start -->
       <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Formulário</h1>
                    <nav aria-label="breadcrumb">

                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

<table class="table">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Data da Formação</th>
      <th scope="col">Duração</th>
      <th scope="col">Categoria</th>
     
    </tr>
  </thead>

  <tbody>

  <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>
         
    <tr>
      <th scope="row"><?= $row['id_formacao'] ?></th>
      <td><?= $row['nome'] ?></td>
      <td><?= $row['descricao'] ?></td>
      <td><?= $row['data_formacao'] ?></td>
      <td><?= $row['duracao'] ?></td>
      <td><?= $row['categoria'] ?></td>
      <td class="text-center">
                          <a class="btn btn-primary btn-xs" href="#"
                            ><span class="glyphicon glyphicon-edit"></span>
                            Edit</a
                          >
                          <a href="#" class="btn btn-danger btn-xs"
                            ><span class="glyphicon glyphicon-remove"></span>
                            Del</a
                          >
                        </td>
    </tr>
    <?php    }
                } else {
                    echo " 0 resultados";
                }

                ?>


                
</table>



  </tbody>

      <!-- Footer Start -->
      <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Formações</h4>
                    <a class="btn btn-link" href="">Workshops Online</a>
                    <a class="btn btn-link" href="">Candidaturas</a>
                    <a class="btn btn-link" href="">Contactos</a>
                    <a class="btn btn-link" href="">FAQ</a>
                    <a class="btn btn-link" href="">Login</a>
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
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your data_formacao">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Subscrever</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
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