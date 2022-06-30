<?php

session_start();
include("connection.php");



$errors = [];
$nome = '';
$date = '';
$email = '';
$genero = '';
$habilitacao = '';
$morada = '';
$area_formacao = '';
$telefone = '';
if (isset($_POST['submit'])) {
    $id_professor = htmlspecialchars($_POST['id_professor']);
    $nome = htmlspecialchars($_POST['nome']);
    $date = htmlspecialchars($_POST['data_nasc']);
    $email = htmlspecialchars($_POST['email']);
    $genero = htmlspecialchars($_POST['genero']);
    $habilitacao = htmlspecialchars($_POST['habilitacao']);
    $morada = htmlspecialchars($_POST['morada']);
    $area_formacao = htmlspecialchars($_POST['area_formacao']);
    $telefone = htmlspecialchars($_POST['telefone']);
    



    if (strlen($email) == 0)
        $errors['nome'] = 'Nome é um campo obrigatorio';
    if (strlen($email) == 0)
        $errors['area_formacao'] = 'Apelido é um campo obrigatorio';
    if (strlen($email) == 0)
        $errors['email'] = 'Email é um campo obrigatorio';


    if (count($errors) == 0) {

        $sql = "UPDATE professor set nome='$nome' ,data_nasc='$date' ,email='$email' ,genero='$genero',habilitacao='$habilitacao' ,morada='$morada', area_formacao='$area_formacao',telefone='$telefone' where id_professor=$id_professor";

        $result = mysqli_query($conn, $sql);
        if ($result && $conn->affected_rows) {
            header('location: admin/professores.php');
            exit(0);
        } else {
            $errors['failed'] = "Não foi possivel editar";
        }
    }
}
if (isset($_GET['id_professor'])) {
    $id_professor = $_GET['id_professor'];
    $sql = "Select * From professor where id_professor=$id_professor";
    $result = mysqli_query($conn, $sql);
    if ($result && $result->num_rows) {
        $row = $result->fetch_assoc();
        $id_professor = $row['id_professor'];
        $nome= $row['nome'];
        $date = $row['data_nasc'];
        $email = $row['email'];
        $genero = $row['genero'];
        $habilitacao = $row['habilitacao'];
        $morada = $row['morada'];
        $area_formacao = $row['area_formacao'];
        $telefone = $row['telefone'];
    } else {
        header('location:admin/professores.php');
        exit(0);
    }
}else{
    header('location:admin/professores.php');
    exit(0);
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
                                <h3 class="text-primary">Update Professores</h3>
                            </a>
                        </div>
                      
                        <?php if (isset($errors['failed'])) { ?>
                            <div class="text-danger"><?= $errors['failed'] ?></div>
                        <?php } ?>

                        <form action="#" method="post">
                        <input type="hidden" name="id_professor" value="<?= $id_professor?>">
                            <div class=" form-floating mb-3">
                                <input type="text" class="form-control" id="floatingText" name="nome" placeholder="Nome" value="<?= $nome ?>" />
                                <label for="floatingText">Nome</label>
                                <?php if (isset($errors['nome'])) { ?>
                                    <div class=" text-danger"><?= $errors['nome'] ?>
                                    </div>
                                <?php } ?>

                            </div>
                             <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingInput" name="data_nasc" placeholder="Data de nascimento" value="<?= $date ?>" />
                                <label for="floatingInput">Data de Nascimento</label>
                                <?php if (isset($errors['data_nasc'])) { ?>
                                    <div class=" text-danger"><?= $errors['data_nasc'] ?>
                                    
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

                            <div class="form-floating mb-3">
                                    <select name="genero" id="id_genero" class="form-select">
                                        <option  <?= $genero=='Feminino' ? 'selected' :'' ?>>Feminino</option>
                                        <option  <?= $genero=='Masculino' ? 'selected' :'' ?>>Masculino</option>
                                        <option  <?= $genero=='Indefenido' ? 'selected' :'' ?>>Indefenido</option>
                                    </select>
                                <label for='id_genero'>Genero</label>
                                <?php if (isset($errors['genero'])) { ?>
                                    <div class=" text-danger"><?= $errors['genero'] ?>
                                    </div>
                                <?php } ?>
                            </div>

                            <div class="form-floating mb-3">
                               
                               <select name="habilitacao" id="id_habilitacao" class="form-select">
                                   <option  <?= $habilitacao=='Licenciatura' ? 'selected' :'' ?>>Licenciatura</option>
                                   <option  <?= $habilitacao=='Mestrado' ? 'selected' :'' ?>>Mestrado</option>
                                   <option  <?= $habilitacao=='Doutoramento' ? 'selected' :'' ?>>Doutoramento</option>
                               </select>
                               <label for="floatingInput">Habilitação</label>
                           <?php if (isset($errors['habilitacao'])) { ?>
                               <div class=" text-danger"><?= $errors['habilitacao'] ?>
                               </div>
                           <?php } ?>
                       </div>

                            <div class="form-floating mb-3">
                                <input type="morada" class="form-control" id="floatingInput" name="morada" placeholder="morada" value="<?= $morada ?>" />
                                <label for="floatingInput">Morada</label>
                                <?php if (isset($errors['morada'])) { ?>
                                    <div class=" text-danger"><?= $errors['morada'] ?>
                                    </div>
                                <?php } ?>
                            </div>

                            <div class="form-floating mb-3">
                            <select name="area_formacao" id="id_area_formacao" class="form-select">
                                        <option  <?= $area_formacao=='Imformática' ? 'selected' :'' ?>>Informática</option>
                                        <option  <?= $area_formacao=='Gestão' ? 'selected' :'' ?>>Gestão</option>
                                        <option  <?= $area_formacao=='Saúde' ? 'selected' :'' ?>>Saúde</option>
                                        <option  <?= $area_formacao=='Educação' ? 'selected' :'' ?>>Educação</option>
                                    </select>
                                    <label for="floatingInput">Área de Formação</label>
                                <?php if (isset($errors['area_formacao'])) { ?>
                                    <div class=" text-danger"><?= $errors['area_formacao'] ?>
                                    </div>
                                <?php } ?>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="telefone" class="form-control" id="floatingInput" name="telefone" placeholder="Telefone" value="<?= $telefone ?>" />
                                <label for="floatingInput">Telefone</label>
                                <?php if (isset($errors['telefone'])) { ?>
                                    <div class=" text-danger"><?= $errors['telefone'] ?>
                                    </div>
                                <?php } ?>
                            </div>

                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <a href="admin/index.html">Voltar à dashboard</a>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary py-3 w-100 mb-4">
                                Update
                            </button>
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