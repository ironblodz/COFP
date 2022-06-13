<?php

session_start();
include("connection.php");

$errors = [];
$nome = '';
$data_formacao = '';
$duracao = '';
$descricao = '';
$categoria = '';
$professor = '';


if (isset($_POST['submit'])) {

    $nome = $_POST['nome'];
    $data_formacao = $_POST['data_formacao'];
    $duracao = $_POST['duracao'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];
    $professor = $_POST['professor'];

    if (strlen($nome) == 0)
        $errors['nome'] = 'Nome é um campo obrigatorio';
    if (strlen($data_formacao) == 0)
        $errors['data_formacao'] = 'Data da Formação é um campo obrigatorio';
    if (strlen($duracao) == 0)
        $errors['duracao'] = 'Duração é um campo obrigatorio';
    if (strlen($descricao) == 0)
        $errors['descricao'] = 'Descrição é um campo obrigatorio';
    if (strlen($categoria) == 0)
        $errors['categoria'] = 'Categoria é um campo obrigatorio';
     {
    }

    if (count($errors) == 0) {
        $sql = "INSERT INTO formacao (nome,data_formacao,duracao,descricao,categoria,fk_id_professor) VALUES('$nome','$data_formacao','$duracao','$descricao','$categoria','$professor')";

        $result = mysqli_query($conn, $sql);
        if ($result && $conn->affected_rows) {
            header('location:admin/listaformacoes.php');
            exit(0);
        } else {
            $errors['failed'] = "Não foi possivel inserir uma nova formação";
        }
    }
    
}
$sql = "select * from professor";
$result = mysqli_query($conn, $sql);
if (!($result && $result->num_rows)) 
{
    header('location:admin/listaformacoes.php');
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
                                <h3 class="text-primary">Inserir Formação</h3>
                            </a>
                        </div>
                        <?php if (isset($errors['failed'])) { ?>
                            <div class="text-danger"><?= $errors['failed'] ?></div>
                        <?php } ?>
                        <form action="#" method="post">
                            <div class=" form-floating mb-3">
                                <input type="text" class="form-control" id="floatingText" name="nome" placeholder="Nome" value="<?= $nome ?>" />
                                <label for="floatingText">Nome</label>
                                <?php if (isset($errors['nome'])) { ?>
                                    <div class=" text-danger"><?= $errors['nome'] ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingText" name="data_formacao" placeholder="data_formacao" value="<?= $data_formacao ?>" />
                                <label for="floatingText">Data da Formação</label>
                                <?php if (isset($errors['data_formacao'])) { ?>
                                    <div class=" text-danger"><?= $errors['data_formacao'] ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="inputProf" name="professor" >
                                    <?php while($row=$result->fetch_assoc()){?>
                                        <option value="<?=$row['id_professor']?>"  
                                           <?=$row['id_professor']==$professor?"selected":""?>
                                        ><?=$row['nome']?></option>
                                    <?php }?>
                                </select>
                                <label for="inputProf">Professor</label>
                                <?php if (isset($errors['data_formacao'])) { ?>
                                    <div class=" text-danger"><?= $errors['data_formacao'] ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="duracao" placeholder="duracao" value="<?= $duracao ?>" />
                                <label for="floatingInput">Duração</label>
                                <?php if (isset($errors['duracao'])) { ?>
                                    <div class=" text-danger"><?= $errors['duracao'] ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="descricao" placeholder="descricao" value="<?= $descricao ?>" />
                                <label for="floatingInput">Descrição</label>
                                <?php if (isset($errors['descricao'])) { ?>
                                    <div class=" text-danger"><?= $errors['descricao'] ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingInput" name="categoria"  >
                                    <option <?=$categoria=='Saúde'? "selected":""?>>Saúde</option>
                                    <option <?=$categoria=='Gestão'? "selected":""?>>Gestão</option>
                                </select>
                                <label for="floatingInput">Categoria</label>
                                <?php if (isset($errors['categoria'])) { ?>
                                    <div class=" text-danger"><?= $errors['categoria'] ?>
                                    </div>
                                <?php } ?>
                            </div>
                           
                            
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <a href="admin/index.html">Voltar à Dashboard</a>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary py-3 w-100 mb-4">
                                Inserir
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