<?php
session_start();
include("connection.php");

$errors = array(); // Cleanup previous errors
if (!empty($_POST)) {

  if (isset($_POST['email'])) $email = trim($_POST['email']);
  else $email = "";
  if (isset($_POST['pass'])) $pass = trim($_POST['pass']);
  else $pass = "";
  if (strlen($email) == 0)
    $errors['email'] = 'Email é um campo obrigatorio';
  if (strlen($pass) == 0)
    $errors['pass'] = 'Password é um campo obrigatorio';
  if (count($errors) == 0) {
    $sql = "select primeiro_nome,apelido,pass from utilizador where email='$email' ";
    $aux = 0;
    $result = $conn->query($sql);
    if ($result) {

      $user = $result->fetch_assoc();
      if (password_verify($pass, $user['pass'])) {
        $aux = 1;
      }
    }
    if ($aux == 1) { // Some dummy authentication
      $_SESSION['authenticated'] = true;
      $_SESSION['username'] = $user['primeiro_nome'].' '.$user['apelido'];
      header('Location: admin/index.html');
    } else {
      $errors['auth'] = 'Autenticação falhada: email/password não correspondem a dados existentes';
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>DASHMIN - Bootstrap Admin Template</title>
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
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                                <h3 class="text-primary">Login</h3>
                            </a>
                        </div>
                        <?php if (isset($errors['auth'])) { ?>
                        <div class=" text-danger"><?= $errors['auth'] ?>
                        </div>
                        <?php } ?>
                        <form action="#" method="post">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" name="email"
                                    placeholder="name@example.com" />
                                <label for="floatingInput">Email address</label>
                                <?php if (isset($errors['email'])) { ?>
                                <div class=" text-danger"><?= $errors['email'] ?>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                                    name="pass" />
                                <label for="floatingPassword">Password</label>
                                <?php if (isset($errors['pass'])) { ?>
                                <div class=" text-danger"><?= $errors['pass'] ?>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <a href="">Perdeu a password?</a>
                                
                            </div>
                            <a href="index.php" class=""><p>Voltar ao website</p>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">
                                Entrar
                            </button>
                            <p class="text-center mb-0">
                                Não tens conta?<a href="signup.php"> Regista-te</a>
                            </p>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
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