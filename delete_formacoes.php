<?php
session_start();
include("connection.php");
if(isset($_POST['id_formacao'])){
$id_formacao=htmlspecialchars($_POST['id_formacao']);

$sql = "DELETE FROM formacao WHERE id_formacao=$id_formacao";

$resulte=$conn->query($sql);
if ($resulte && $conn->affected_rows) {
  echo "Foi eliminado com sucesso";
} else {
  echo "Erro ao excluir registro: " . $conn->error;
}

header('location:admin/listaformacoes.php');

$conn->close();

}