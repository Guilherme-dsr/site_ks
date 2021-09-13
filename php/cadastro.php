<?php
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$user = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$_SESSION['Nome'] = $_POST['nome'];

$result_usuario = "INSERT INTO cliente VALUES ( 0,'$nome','$user', '$senha')";

$resutado_usuario = mysqli_query($conn, $result_usuario);

header("Location: ../pags/login.php");

?>