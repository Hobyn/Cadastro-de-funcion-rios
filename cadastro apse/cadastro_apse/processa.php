<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$mae = filter_input(INPUT_POST, 'mae', FILTER_SANITIZE_STRING);
$pai = filter_input(INPUT_POST, 'pai', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
$dtnasc = filter_input(INPUT_POST, 'dtnasc', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$zap = filter_input(INPUT_POST, 'zap', FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$indicacao = filter_input(INPUT_POST, 'indicacao', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO cadastro (nome, mae, pai, cpf, email , rg, dtnasc, telefone, zap, rua, numero, bairro, cidade, estado, indicacao, cep, created) VALUES ('$nome', '$mae','$pai', '$cpf', '$email', '$rg', '$dtnasc', '$telefone', '$zap', '$rua', '$numero', '$bairro', '$cidade', '$estado', '$indicacao', '$cep',  NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: cadastro.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: cadastro.php");
}

?>