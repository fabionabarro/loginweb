<?php 
	include "abrir_banco.php";

	$login    = $_POST["txtlogin"];
	$senha    = $_POST["txtsenha"];
	$senha2   = $_POST["txtsenha2"];
	$nome     = $_POST["txtnome"];
	$email    = $_POST["txtemail"];
	$endereco = $_POST["txtendereco"];
	$telefone = $_POST["txttelefone"];
	$celular  = $_POST["txtcelular"];

	
	$query = "select login from cadastro where login = '$login' ";
	$result = mysqli_query($mysqli, $query); 
	$row = mysqli_num_rows($result);

	if($row == 1)
	{	$_SESSION['login'] = $login;	
	}
  ?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style>
			@import url('https://fonts.googleapis.com/css?family=Julius+Sans+One');
			@font-face{
				font-family: 'Selima';
				src: url('Selima.otf') format('opentype');
			}

			header{
				position: fixed;
				z-index: 5;
				width: 100%;
				top: 0;
				left: 0;
				display: flex;
				justify-content: space-between;
				align-items: center;
				border-width: medium;
				border-top: 0px;
				border-right: 0px;
				border-left: 0px;
				border-style: solid;
				border-color: #cdcdcd;
				background-color: white;
				height: 50px;
				transition: 0.8s;
			}
			
			header h1{
				font-weight: normal;
				position: relative;
				left: 100px;
				top: -10px;
				font-family: 'Selima';
				font-size: 35pt;
				color: gray;
				transition: 0.8s;
			}

			.logout{
				margin-right: 20px;
				width: 50px;
				height: 50px;
			}


			header h2{
				margin-right: 20px;
			}

			header nav{
				display: flex;
			}

			nav,a, ul{
				text-decoration: none;
			}

			header li{
				margin: 0px 15px;
				text-decoration: none;
				font-family: 'Julius Sans One', sans-serif;
				color: black;
				padding: 10px;
				transition: 0.8s;
			}

			.body{
				position: absolute;
				top: 0%;
				left: 0%;
				margin: 75px 0px 0px 40px;
				padding: 0px;
				width: 94.5%;
				height: 505px;
				background: rgba(207, 207, 207,.4);
				box-shadow: 2px 2px 15px 2px rgba(0,0,0,.4);
				background-size: cover;
				z-index: 0;
			}
							
		</style>
	</head>
		<body>
			<div class="body"> 
				<header>
					<h1>Josimara Valim</h1>
					<a href="logout.php"><img src="Imagens/logout.png" class="logout"></a>
				</header>
				<div class="text">
					<h1>Cadastro feito com sucesso!</h1>
					<input type="button" name="btnvoltar" value="Voltar" onclick="location.href='http://localhost/loginweb/cadastro.php';">
				</div>
			</div>
		</body>
</html>
		