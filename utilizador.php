<?php
session_start();
include "connection.php";
$query = "SELECT dtaNascimento,email,Morada,genero,nome,telefone FROM utilizadores";
$result = $conn->query($query);






$conn->close();
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
    <meta charset="utf-8">
    <title>Formações</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
</head>
    <title>Document</title>
</head>
<body>
<table class="table">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Genero</th>
      <th scope="col">DataNascimento</th>
      <th scope="col">Email</th>
      <th scope="col">Morada</th>
      <th scope="col">Telefone</th>
    </tr>
  </thead>
  <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>

  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?= $row['id_utilizador'] ?></td>
      <td><?= $row['nome'] ?></td>
      <td><?= $row['genero'] ?></td>
      <td><?= $row['dtaNascimento'] ?></td>
      <td><?= $row['email'] ?></td>
      <td><?= $row['Morada'] ?></td>
      <td><?= $row['telefone'] ?></td>
    </tr>
    <?php    }
                } else {
                    echo " 0 resultados";
                }

                ?>
</table>

  </tbody>

</body>
</html>