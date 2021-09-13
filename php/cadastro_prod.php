<?php
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
$qtd = filter_input(INPUT_POST, 'qtd', FILTER_SANITIZE_STRING);
$preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_STRING);

date_default_timezone_set('America/Sao_Paulo');
$data_atual = date("Y-m-d H:i:s");


$result_usuario = "INSERT INTO produtos VALUES ( 0,'$nome','$marca', '$qtd','$preco', '$data_atual',null)";

$resutado_usuario = mysqli_query($conn, $result_usuario);

header("Location: ../pags/cadastros/cadastro_prod.php");

?>