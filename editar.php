<?php 
session_start();

include "abrir_banco.php";
//ele executa um select e orden os dados pelo codigo

$codigo = $_GET["codigo"];


$executa =" select * from consulta where codigo = $codigo";

$query = $mysqli->query($executa);

//ele faz um loop uma vez para pegar os dados
while ($dados=mysqli_fetch_object($query)) {
	$login   =$dados->login;
	$nome  =$dados->nome ;
	$endereco  =$dados->endereco ;
	$celular  =$dados->celular ;
	$email   =$dados->email ;
	$servico   =$dados->servico ;
	$data  =$dados->data ;
	$men   =$dados->men ;
}

$query->free();
//tem q limpar a memoria das consultas no servidor
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Julius+Sans+One');
		@font-face{
			font-family: 'Selima';
			src: url('Selima.otf') format('opentype');
		}
		@keyframes bounce{
			0%, 20%, 60%, 100%{
				-webkit-transform: translateY(0);
				transform: translateY(0);
			}	
			40%{
				-webkit-transform: translateY(-20px);
				transform: translateY(-20px);
			}
			80%{
				-webkit-transform: translateY(-10px);
				transform: translateY(-10px);
			}
		}

		.balanco:hover{
			animation: bounce 1s infinite;
		}

		.balanco2:hover{
			animation: bounce 1s infinite;
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

		div#form{
			position: absolute;
			margin: 0 auto;
			top: 10%;
			left: 26%;
			width: 670px;
			height: 390px;
			z-index: 2;	
			border: 1px solid black;
			box-shadow: 2px 2px 15px 2px rgba(0,0,0,.4);
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

		table{
			font-family: 'Julius Sans One', sans-serif;
			position: relative;
			top: 12%;
			left: 20%;
			width: 350px;
			text-align: center;
			margin-bottom: 20px; 
		}

		input{
			width: 300px;
		}

		input[type=button]{
			position: relative;
			border: 1px solid black;
			border-radius: 4px;
			width: 90px;
			height: 35px;
			left: 40%;
			background: rgba(0,0,0,.7);
			color: white;
			box-shadow: 2px 2px 2px 2px black;
			transition: 0.8s;
			cursor: pointer;
		}

		input[type=submit]{
			position: relative;
			border: 1px solid black;
			border-radius: 4px;
			margin-right: 10px;
			width: 90px;
			height: 35px;
			left: 35%;
			background: rgba(0,0,0,.7);
			color: white;
			box-shadow: 2px 2px 2px 2px black;
			transition: 0.8s;
			cursor: pointer;
		}

		h1{
			font-family: 'Julius Sans One', sans-serif;
			text-align: center;
		}
	</style>
</head>
	<body>
		<header>
			<h1>Josimara Valim</h1>
			<a href="logout.php"><img src="Imagens/logout.png" class="logout"></a>
		</header>
			<div class="body">
				<div id="form">
					<form method="POST" action="editarexecuta.php">
						<input type="hidden" name="txtcodigo" value="<?php echo $codigo?>">
							<h1> EDITAR CAMPOS </h1>	
					<table>
						<tr>
						<th>Codigo:</th>
							<td>
								<input type="text" name="txtcodigo" value="<?php echo $codigo?>">
							</td>
						</tr>
						<tr>
						<th>Login:</th>
							<td>
								<input type="text" name="txtlogin" value="<?php echo $login?>">
							</td>
						</tr>
						<tr>
						<th>nome:</th>
							<td>
								<input type="text" name="txtnome" value="<?php echo $nome?>">
							</td>
						</tr>
						<tr>
						<th>Endereço:</th>
							<td>
								<input type="text" name="txtendereco" value="<?php echo $endereco?>">
							</td>
						</tr>
						<tr>
						<th>Celular:</th>
							<td>
								<input type="text" name="txtcelular" value="<?php echo $celular?>">
							</td>
						</tr>
						<tr>
						<th>Email:</th>
							<td>
								<input type="text" name="txtemail" value="<?php echo $email?>">
							</td>
						</tr>
						<tr>
						<th>servico:</th>
							<td>
								<input type="text" name="txtservico" value="<?php echo $servico?>">
							</td>
						</tr>
						<tr>
						<th>data:</th>
							<td>
								<input type="text" name="txtdata" value="<?php echo $data?>">
							</td>
						</tr>
						<tr>
						<th>Mensagem:</th>
							<td>
								<input type="text" name="txtmen" value="<?php echo $men?>">
							</td>
						</tr>
					
					</table>
			   			<br>
							   <input type="submit" value="Gravar" name="enviar" class="balanco">
							   <input type="button" onclick="location.href='http://localhost/loginweb/webmaster.php';" value="Consultar" class="balanco2" />
					</form>
				</div>
			</div>	
	</body>
</html>

