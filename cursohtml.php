<?php
session_start();
include "connect.php";
$query = "SELECT id_utilizador,primeiro_nome,telefone,email,apelido FROM utilizador WHERE apelido like 'Escola'";
$result=$conn->query($query);

if($result-> num_rows >0) {
    $row = $result-> fetch_assoc();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon" />

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
          href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
          rel="stylesheet"
        />
    
        <!-- Icon Font Stylesheet -->
        <link
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
          rel="stylesheet"
        />
        <link
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
          rel="stylesheet"
        />
    
        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet" />
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    
        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />
    
        <!-- Template Stylesheet -->
        <link href="css/cursohtml.css" rel="stylesheet" />
        <link rel="stylesheet" href="estrela.css">
</head>
<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
      <a href="login.php">
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
          
          <a href="formacoes.html" class="nav-item nav-link">Formações</a>
          <a href="#" class="nav-item nav-link">Workshops online</a>
          <a href="#" class="nav-item nav-link">Candidaturas</a>
          <a href="contacto.html" class="nav-item nav-link">Contactos</a>
          <a href="#" class="nav-item nav-link">FAQ</a>
        </div>
        <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block"
          >Login<i class="fa fa-arrow-right ms-3"></i
        ></a>
      </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header1">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-1 text-white animated slideInDown">HTML 5 [40 Horas]</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    </div>

    <div class="course">
        <div class="course-info">
           <h6>Curso HTML</h6>
           <h2>Fundamentos HTML</h2>
           <a href="#">Ver todos os capitulos <i class="fa fa-chevron-right"></i></a>
        </div>
        <div class="course-progress">
           <div class="progress-container">
              <div class="progress"></div>
              <div class="progress-text">
                 08/16
              </div>
           </div>
           <h6>Capítulo 1</h6>
           <h2>Formataçao de texto HTML5</h2>
           <button class="btn3">Continuar</button>
        </div>
    </div>

    <div class="course">
        <div class="course-info">
           <h6>Curso HTML</h6>
           <h2>Fundamentos HTML</h2>
           <a href="#">Ver todos os capitulos <i class="fa fa-chevron-right"></i></a>
        </div>
        <div class="course-progress">
           <div class="progress-container">
              <div class="progress"></div>
              <div class="progress-text">
                 08/16 
              </div>
           </div>
           <h6>Capítulo 2</h6>
           <h2>Formataçao de texto HTML5</h2>
           <button class="btn3">Continuar</button>
        </div>
    </div>

    <div class="course">
        <div class="course-info">
           <h6>Curso HTML</h6>
           <h2>Fundamentos HTML</h2>
           <a href="#">Ver todos os capitulos <i class="fa fa-chevron-right"></i></a>
        </div>
        <div class="course-progress">
           <div class="progress-container">
              <div class="progress"></div>
              <div class="progress-text">
                 08/16 
              </div>
           </div>
           <h6>Capítulo 3</h6>
           <h2>Formataçao de texto HTML5</h2>
           <button class="btn3">Continuar</button>
        </div>
    </div>

    <h1>Deixe a sua opiniao</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg']."<br><br>";
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa.php" enctype="multipart/form-data">
			<div class="estrelas">
				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>
				
				<input type="submit" value="Avaliar">
				
			</div>
		</form>



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
                      <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                      <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Subscrever</button>
                  </div>
              </div>
          </div>
      </div>
      
  </div>
      <!-- Footer End -->
  
      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
        ><i class="bi bi-arrow-up"></i
      ></a>

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