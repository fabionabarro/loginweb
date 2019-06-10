<?php

session_start();
include('abrir_banco.php');
 
if(empty($_POST['login']) || empty($_POST['senha'])) {
  header('Location: index.php');
  exit();
}
 
$login = mysqli_real_escape_string($mysqli, $_POST['login']);
$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);
 
$query = "select codigo, login from cadastro where login = '$login' and senha = '$senha'";
 
$result = mysqli_query($mysqli, $query);
 
$row = mysqli_num_rows($result);

if($login == "webmaster"){
	$_SESSION['loginw'] = $login;
	header('Location: webmaster.php');
 	exit();
} 
elseif($row == 1) {
  	$_SESSION['login'] = $login;
  	
 	 header('Location: agenda.php');
  	exit();
}
else {
 	 $_SESSION['nao_autenticado'] = true;
  	header('Location: index.php');
  	exit();
}
 
