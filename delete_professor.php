<?php
session_start();
include("connection.php");
if (isset($_POST['id_professor'])) {

  $id_professor = htmlspecialchars($_POST['id_professor']);

  $sql = "DELETE FROM professor WHERE id_professor=$id_professor";

  $resulte = $conn->query($sql);
  if ($resulte && $conn->affected_rows) {
    echo "Foi eliminado com sucesso";
  } else {
    echo "Erro ao excluir registro: " . $conn->error;
  }

  header('location:admin/professores.php');

  $conn->close();
}