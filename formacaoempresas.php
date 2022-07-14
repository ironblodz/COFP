<?php
session_start();
include "connection.php";
$query = "SELECT id_formacao,nome,data_formacao,duracao,descricao,categoria FROM formacao WHERE categoria like 'Gestão'";
$result=$conn->query($query);

if($result-> num_rows >0) {
    $row = $result-> fetch_assoc();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Formação Empresas</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet" />

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
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
            <a href="signin.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Formação Empresas</h1>

                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Team Start -->


    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Formação</h6>
                    <h1 class="mb-5">FORMAÇÃO EMPRESAS</h1>
                </div>

                <div data-wow-delay="0.1s">
                    <div class="mb-4">
                        <h1 class="mb-4">Formação</h1>


                        <p class="mb-4">

                            Faça formação em segurança em qualquer lugar e a qualquer hora! <br><br>

                            Com uma experiência de 15 anos o INFO desenvolve conteúdos ajustados para obtenção de
                            resultados máximos, para o desenvolvimento de pessoas e organizações. <br><br>

                            Garantimos em 48 horas um plano de formação à sua medida, ajustado à realidade da sua
                            empresa, de acordo com as necessidades identificadas e condições definidas pelo cliente .
                            <br><br>

                            Em 4 ETAPAS criamos, desenvolvemos e validamos o seu projeto . <br><br>
                        </p>



                        <h1 class="mb-4">Garantias</h1>
                        <p class="mb-4">
                            <i class="fa fa-arrow-right text-primary me-2"></i>
                            Programas ajustados á realidade da empresa
                            <br>
                            <i class="fa fa-arrow-right text-primary me-2"></i>
                            Flexibilidade de horário e otimização do tempo
                            <br>
                            <i class="fa fa-arrow-right text-primary me-2"></i>
                            Melhor preço qualidade do mercado
                            <br>
                            <i class="fa fa-arrow-right text-primary me-2"></i>
                            Equipa de formadores credenciada e sempre presente
                            <br>
                            <i class="fa fa-arrow-right text-primary me-2"></i>
                            Acesso 365 dias aos conteúdos da formação
                            <br>
                            <i class="fa fa-arrow-right text-primary me-2"></i>
                            Plataforma vitalícia que permite acesso à avaliação, certificação e outros recursos
                            utilizados na formação
                            <br>
                            <i class="fa fa-arrow-right text-primary me-2"></i>
                            Coordenador pedagógico de apoio, a qualquer hora
                            <br>
                            <i class="fa fa-arrow-right text-primary me-2"></i>
                            Diversidade de oferta formativa

                        </p>


                        <!-- Service Start -->
                        <div class="container-xxl py-5">
                            <div class="container">
                                <div class="row g-4">
                                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="service-item text-center pt-3">
                                            <div class="p-4">
                                                <i class="fa fa-3x fa fa-edit text-primary mb-4"></i>
                                                <h5 class="mb-3">DIAGNOSTICAR</h5>
                                                <p>
                                                    Diagnosticar <br>
                                                    Identificação das necessidades da Empresa
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="service-item text-center pt-3">
                                            <div class="p-4">
                                                <i class="fa fa-3x fa fa-calendar text-primary mb-4"></i>
                                                <h5 class="mb-3">PLANIFICAR</h5>
                                                <p>
                                                    Escolha da equipa <br>
                                                    Planificação e estratégia de implementação em equipa
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="service-item text-center pt-3">
                                            <div class="p-4">
                                                <i class="fa fa-3x fa fa-check text-primary mb-4"></i>
                                                <h5 class="mb-3">EXECUTAR</h5>
                                                <p>
                                                    Organizar , Desenvolver e acompanhar o Plano de Formação
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                                        <div class="service-item text-center pt-3">
                                            <div class="p-4">
                                                <i class="fa fa-3x fa fa-eye text-primary mb-4"></i>
                                                <h5 class="mb-3">AVALIAR</h5>
                                                <p>
                                                    Avaliação dos objetivos <br>
                                                    Análise do ROI do Plano de formação
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- Service End -->
                        <h4> <b>Consulte-nos através dos nossos contactos ou preencha o formulário e a nossa equipa irá
                                preparar o seu Plano de Formação ONLINE.</b></h4>


                    </div>
                </div>

            </div>
        </div>
    </div>





    <!-- Team End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Links Rápidos</h4>
                    <a class="btn btn-link" href="">Formações</a>
                    <a class="btn btn-link" href="">Workshops</a>
                    <a class="btn btn-link" href="">Candidaturas</a>
                    <a class="btn btn-link" href="">Contacto</a>
                    <a class="btn btn-link" href="">Perguntas Frequentes</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contacto</h4>
                    <p class="mb-2">
                        <i class="fa fa-map-marker-alt me-3"></i>Rua Miguel Torga, Leiria
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-phone-alt me-3"></i>+351 923 021 021
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-envelope me-3"></i>cofphelp@gmail.com
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Galeria</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="" />
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="" />
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="" />
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="" />
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="" />
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Subscreva e receba todas as novidades no seu email.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="O teu email" />
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
                            Subscreve
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">COFP</a>, Todos os direitos Reservados,
                        Desenvolvido por nós

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