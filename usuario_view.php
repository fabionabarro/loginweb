<?php
session_start();
include "abrir_banco.php";


$login = $_SESSION['login'];
echo "$login";
$executa =" select * from consulta where login = '$login' ";

$query = $mysqli->query($executa);

?>
	<style type="text/css">

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

		table{
			font-family: 'Julius Sans One', sans-serif;
			position: relative;
			top: 12%;
			text-align: center;
			box-shadow: 2px 2px 15px 2px rgba(0,0,0,.4);
		}
	</style>

	<header>
		<h1>Josimara Valim</h1>
		<a href="agenda.php"><img src="Imagens/logout.png" class="logout"></a>
	</header>
	<div class="body">
		<table border="1">
			<tr>
			  <th>Codigo</th>	
			  <th colspan="2">Login</th>
			  <th colspan="2">Nome</th>
			  <th colspan="2">Endereço</th>
			  <th colspan="2">Celular</th>
			  <th colspan="2">Telefone</th>
			  <th colspan="2">Email</th>
			  <th colspan="2">Serviço</th>
			  <th colspan="2">Data</th>
			  <th colspan="2">Mensagem</th>
			  <th>Ação</th>
			  <th>Ação</th>
			</tr>
		<?php
			while ($dados=mysqli_fetch_object($query)) {
				$cod = $dados->codigo;
				echo "<tr> <td>".$dados->codigo  ."</td>";
				echo "<td colspan='2'>" .$dados->login  ."</td>";
				echo "<td colspan='2'>" .$dados->nome  ."</td>";
				echo "<td colspan='2'>" .$dados->endereco  ."</td>";
				echo "<td colspan='2'>" .$dados->celular  ."</td>";
				echo "<td colspan='2'>" .$dados->telefone ."</td>";
				echo "<td colspan='2'>" .$dados->email  ."</td>";
				echo "<td colspan='2'>" .$dados->servico  ."</td>";
				echo "<td colspan='2'>" .$dados->data  ."</td>";
				echo "<td colspan='2'>" .$dados->men  ."</td>";
				echo "<td><a href='editar_usuario.php?codigo=$cod' >Editar</a></td>";
				echo "<td><a href='excluir_usuario.php?codigo=$cod' >Excluir</a></td>";

				}	
				$query->free();
		?>
	</table>
</div>	