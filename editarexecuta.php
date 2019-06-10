<!DOCTYPE html>
<html>
<head>
	<title>Confirn</title>
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
</head>
	<body>
		<div class="body">
			<?php 

				include "abrir_banco.php";//pega o codigo em outro arquivo e inclui aqui
				$nome   = $_POST["txtnome"];
				$servico = $_POST["txtservico"];
				$data  = $_POST["txtdata"];
				$men = $_POST["txtmen"];
				$codigo = $_POST["txtcodigo"];

				$executa = "UPDATE consulta SET nome ='$nome',servico='$servico',data='$data',men='$men' where codigo =$codigo";
				//ela pega tudo o q foi digitado e coloca no banco de dados

				$query = $mysqli->query($executa);//nome da função mysqli no outro documento

				//vai no banco de dados e executa o comando inserir
				//query é qualquer comando de banco de dados.

				echo "<fieldset>";
				echo "<center><font color='red'>";

				echo "<h1>Alteracao Realizada com Sucesso<br>";
				echo "<br><br><br>";

				echo"<form action='webmaster.php'>";
				  echo  "<input type='submit' value='Consulta' />";
				echo"</form>";
				echo "</fieldset>";
			?>
		</div>	
	</body>
</html>