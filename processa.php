<?php
session_start();
include_once('conexao.php');

$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$senha2 = filter_input(INPUT_POST, 'senha2', FILTER_SANITIZE_STRING);

$result_usuario= "INSERT INTO tabelaprojeto1 (usuario,email,senha,senha2) VALUES ('$usuario','$email','$senha','$senha2')";
$resultado_usuario= mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	header("Location: valida.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: index.php");
}
?>