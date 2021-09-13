<?php
session_start(); 
include_once("conexao.php");

$id = $_POST['id'];
$dtq_c = $_POST['qtd_c'];

date_default_timezone_set('America/Sao_Paulo');

$data_atualizada = date("Y-m-d H:i:s");

$_SESSION['nome_comprador'] = $_POST['nome_comprador'];
$_SESSION['email_comprador'] = $_POST['email_comprador'];

$instrucao="UPDATE produtos SET  qtd = qtd-$dtq_c , data_atualizada ='$data_atualizada' WHERE id = '$id ' and qtd >= $dtq_c " ;


$select = "SELECT qtd FROM produtos WHERE id ='$id'";
$var = mysqli_query($conn, $select);
while($dado = $var -> fetch_array()) {
	$qtd = $dado['qtd'];
	$_SESSION['quantidade'] = $qtd;
	if($qtd >= $dtq_c ){
		header("location: ../pags/compra_sucesso.php");
	}else{
		header("location: ../pags/compra_erro.php");
	}
}
mysqli_query($conn, $instrucao);


?>