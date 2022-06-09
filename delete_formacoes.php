<?php
session_start();
include("connection.php");

$sql = "DELETE FROM formacao WHERE id_utilizador= ?";

if ($conn->query($sql) === TRUE) {
  echo "Foi eliminado com sucesso";
} else {
  echo "Erro ao excluir registro: " . $conn->error;
}

$conn->close();
