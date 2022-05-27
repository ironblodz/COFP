<?php

session_start();
	include("ligacao.php");
	

if (isset($_POST['submit'])) {

  $username = $_POST['nome'];
  $password =  hash('sha512',$_POST['password']);
  $email = $_POST['email'];

  $sql = "INSERT INTO registos (nome,password,email) VALUES('$username','$password','$email')";

  mysqli_query($mysqli, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">


    <title>Registo</title>
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/navbar.css" media="screen">
    <link rel="stylesheet" href="assets/css/main.css">



</head>

<body class="home">


    <!-- container -->
    <div class="container">



        <div class="row">

            <!-- Article main content -->
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Registo</h1>
                </header>

                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="thin text-center">Cria uma conta</h3>
                            <p class="text-center text-muted">Caso já tenha uma conta criada pode dar login aqui, <a
                                    href="login.php">Login</a> Caso não tenha conta não hesite em criar uma. </p>
                            <hr>

                            <form method="post" action=#>
                                <div class="top-margin">
                                    <label>Nome<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="nome" type="nome">
                                </div>
                                <div class="top-margin">
                                    <label>Email<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="email" type="email">
                                </div>

                                <div class="row top-margin">
                                    <div class="col-sm-6">
                                        <label>Password <span class="text-danger">*</span></label>
                                        <input type="password" name="password" type="password" minlength="8" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Confirmar Password <span class="text-danger">*</span></label>
                                        <input type="password" name="password" minlength="8" required>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-lg-8">

                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <button class="btn btn-action" type="submit" name="submit">Registar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </article>
            <!-- /Article -->

        </div>
    </div> <!-- /container -->


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/headroom.min.js"></script>
    <script src="assets/js/jQuery.headroom.min.js"></script>
    <script src="assets/js/template.js"></script>
</body>

</html>