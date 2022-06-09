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

    if (strlen($email) == 0)
        $errors['primeiro_nome'] = 'Nome é um campo obrigatorio';
    if (strlen($email) == 0)
        $errors['apelido'] = 'Apelido é um campo obrigatorio';
    if (strlen($email) == 0)
        $errors['email'] = 'Email é um campo obrigatorio';
    if ($pass != $cpass) {
        $errors['password'] = "As passwords indicadas não são iguais";
    }

    if (count($errors) == 0) {
        $password = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "UPDATE utilizador (primeiro_nome,apelido,email,pass) VALUES('$username','$apelido','$email','$password')";

        $result = mysqli_query($conn, $sql);
        if ($result && $conn->affected_rows) {
            header('location: admin/users.html');
            exit(0);
        } else {
            $errors['failed'] = "Não foi possivel editar";
        }
    }
}
?>