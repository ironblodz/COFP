<?php
session_start();
include("ligacao.php");

$errors = array(); // Cleanup previous errors
if (!empty($_POST)) {
	
	if (isset($_POST['email'])) $email = trim($_POST['email']);
	else $email = "";
	if (isset($_POST['password'])) $password = trim($_POST['password']);
	else $password = "";
	if (strlen($email) == 0)
		$errors['email'] = 'Empty email';
	if (strlen($password) == 0)
		$errors['password'] = 'Empty password';
	if (count($errors) == 0) {
		$sql = "select nome,password from registos where email='$email' ";
		$aux = 0;
		$result = $mysqli->query($sql);
		if ($result) {
		
			$user = $result->fetch_assoc();
			if (hash('sha512',$password)== $user['password']) {
				$aux = 1;
			}
		}
		if ($aux == 1) { // Some dummy authentication
			$_SESSION['authenticated'] = true;
			$_SESSION['username'] = $user['nome'];
			header('Location: index.html');
		} else {
			$errors['auth'] = 'Authentication failed';
		}
	}

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title>Login</title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.png">

    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/navbar.css" media="screen">
    <link rel="stylesheet" href="assets/css/main.css">





</head>

<body class="home">

    <!-- container -->

    <header id="head" class="secondary"></header>
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Area Utilizador</li>
        </ol>

        <div class="row">
            <!-- fim container -->






            <!-- Caixa Login -->
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Login</h1>

                </header>

                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="thin text-center">Entra com a tua conta</h3>
                            <p class="text-center text-muted">Caso ainda não tenhas conta criada podes criar aqui, <a
                                    href="registo.php">Criar conta</a> caso tenha conta basta fazer login</p>
                            <hr>
                            <?php if (count($errors) != 0 && array_key_exists('auth',$errors)) 
										echo "<div class='text-danger'>".$errors['auth']. "</div>";
							?>
                            <form method=POST action=# onsubmit="return validation()">
                                <div class="top-margin">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="email" type="email">
                                    <?php if (count($errors) != 0 && array_key_exists('email',$errors)) 
										echo "<div class='text-danger d-inline'>".$errors['email']. "</div>";
									?>

                                </div>


                                <div class="top-margin">
                                    <label>Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" name="password" type="password">
                                    <?php if (count($errors) != 0 && array_key_exists('password',$errors)) 
										echo "<div class='text-danger d-inline'>".$errors['password']. "</div>";
									?>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-lg-8">
                                        <b><a href="index.html">Voltar ao website</a></b>
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <button class="btn btn-action" type="submit" name="submit">Entrar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </article>
        </div>
    </div> <!-- fim login -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/headroom.min.js"></script>
    <script src="assets/js/jQuery.headroom.min.js"></script>
    <script src="assets/js/template.js"></script>
</body>

</html>