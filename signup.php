<?php

session_start();
include("connection.php");

$errors = [];
$username = '';
$apelido = '';
$email = '';
if (isset($_POST['submit'])) {

    $username = $_POST['primeiro_nome'];
    $apelido = $_POST['apelido'];
    $email = $_POST['email'];
    $pass =  $_POST['password'];
    $cpass =  $_POST['confirmPassword'];

    if (strlen($username) == 0)
        $errors['primeiro_nome'] = 'Nome é um campo obrigatorio';
    if (strlen($apelido) == 0)
        $errors['apelido'] = 'Apelido é um campo obrigatorio';
    if (strlen($email) == 0)
        $errors['email'] = 'Email é um campo obrigatorio';
    if ($pass != $cpass) {
        $errors['password'] = "As passwords indicadas não são iguais";
    }

    if (count($errors) == 0) {
        $password = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO utilizador (primeiro_nome,apelido,email,pass) VALUES('$username','$apelido','$email','$password')";

        $result = mysqli_query($conn, $sql);
        if ($result && $conn->affected_rows) {
            header('location:signin.php');
            exit(0);
        } else {
            $errors['failed'] = "Não foi possivel inserir o utilizador";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>DASHMIN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary">Registar</h3>
                            </a>
                        </div>
                        <?php if (isset($errors['failed'])) { ?>
                            <div class="text-danger"><?= $errors['failed'] ?></div>
                        <?php } ?>
                        <form action="#" method="post">
                            <div class=" form-floating mb-3">
                                <input type="text" class="form-control" id="floatingText" name="primeiro_nome" placeholder="Nome" value="<?= $username ?>" />
                                <label for="floatingText">Nome</label>
                                <?php if (isset($errors['primeiro_nome'])) { ?>
                                    <div class=" text-danger"><?= $errors['primeiro_nome'] ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingText" name="apelido" placeholder="Apelido" value="<?= $apelido ?>" />
                                <label for="floatingText">Apelido</label>
                                <?php if (isset($errors['apelido'])) { ?>
                                    <div class=" text-danger"><?= $errors['apelido'] ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" value="<?= $email ?>" />
                                <label for="floatingInput">Email address</label>
                                <?php if (isset($errors['email'])) { ?>
                                    <div class=" text-danger"><?= $errors['email'] ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" />
                                <label for="floatingPassword">Password</label>
                                <?php if (isset($errors['password'])) { ?>
                                    <div class=" text-danger"><?= $errors['password'] ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirmar Password" />
                                <label for="confirmPassword">Confirmar Password</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <a href="signin.php">Voltar para o login</a>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary py-3 w-100 mb-4">
                                Submeter
                            </button>
                            <p class="text-center mb-0">
                                Já tens conta criada? <a href="signup.html">Inicia Sessão</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>