<?php
session_start();
include("connection.php");
if (isset($_POST['id_utilizador'])) {

  $id_utilizador = htmlspecialchars($_POST['id_utilizador']);

  $sql = "DELETE FROM utilizador WHERE id_utilizador=$id_utilizador";

  $resulte = $conn->query($sql);
  if ($resulte && $conn->affected_rows) {
    echo "Foi eliminado com sucesso";
  } else {
    echo "Erro ao excluir registro: " . $conn->error;
  }

  header('location:admin/users.php');

  $conn->close();
}
