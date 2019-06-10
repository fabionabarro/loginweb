<?php
	session_start();
	include('verifica.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Calendário </title>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css">
		<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
		<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
		<script>
			$(function(){
				$("#calendario").datepicker({
					dateFormat: 'dd/mm/yy',
					dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
					dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
					dayNamesShort: ['Dom','Seg','Ter','Qua','Quin','Sex','Sab','Dom'],
					monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
					monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
				});
			});
		</script>
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

			.efeito{
				border: none;
				cursor: pointer;
				box-sizing: border-box;
				transition: all 500ms ease;
				position: relative;
			}

			.efeito-1{
				background: rgba(255,255,255,.0);
			}

			.efeito:hover{
				background: rgba(0,0,0,0.1);
				border-radius: 5px;
			}

			nav#menu li:hover{
				font-weight: bolder;
				transition: 500ms;
			}

			@media(max-width: 700px){
				header{
					flex-direction: column;
					height: 95px;
					transition: 0.8s;
				}
				header h1{
					top: -10px;
					left: 0px;
					transition: 0.8s;
				}
				nav li{
					position: relative;
					top: -5px;
					transition: 0.8s;
				}
			}

			body{
				background: white;
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

			h1.nome{
				text-align: center;
				font-size: 25px;
				color: gray;
				font-family: 'Julius Sans One', sans-serif;
			}

			div#form{
				position: absolute;
				margin: 0 auto;
				top: 27%;
				left: 26%;
				width: 670px;
				height: 390px;
				z-index: 2;	
				border: 1px solid black;
				box-shadow: 2px 2px 15px 2px rgba(0,0,0,.4);
			}

			.form{
				text-align: center;
				position: relative;
				top: 6%;
				padding: 10px;
				font-family: 'Julius Sans One', sans-serif;
			}

			textarea{
				position: relative;
				left: 0.5%;
			}

			input, select, option, textarea{
				font-family: 'Julius Sans One', sans-serif;
				font-weight: bolder;
			}
			
			input{
				width: 200px;
				height: 25px;
			}

			select{
				position: relative;
				left: 0.3%;
				height: 30px;
				width: 204px;
			}

			p{
				margin: 0 165px 0 0;
				padding: 0;
			}

			input.envia{
				position: relative;
				border: 1px solid black;
				border-radius: 4px;
				top: 5px;
				left: -13%;
				width: 90px;
				height: 35px;
				background: rgba(0,0,0,.7);
				color: white;
				box-shadow: 2px 2px 2px 2px black;
				transition: 0.8s;
				cursor: pointer;
			}

			input.user{
				position: absolute;
				border: 1px solid black;
				border-radius: 4px;
				left: 55%;
				top: 88.29%;
				width: 90px;
				height: 35px;
				background: rgba(0,0,0,.7);
				color: white;
				box-shadow: 2px 2px 2px 2px black;
				transition: 0.8s;
				cursor: pointer;
				z-index: 5;
			}
		</style>
	</head>
	<body>
		<header>
			<h1>Josimara Valim</h1>
			<a href="logout.php"><img src="Imagens/logout.png" class="logout"></a>
		</header>
		<div id="form">
			<form name="formadata" class="form" method="POST" action="grava_data.php">
					Tipo: <select name="txtservico">
						<option value="individual">Ensaio Invidual</option>
						<option value="casal">Ensaio de Casal</option>
						<option value="familia">Ensaio em Família</option>
						<option value="casamento">Casamento</option>
						<option value="eventos">Eventos</option>
						<option value="outros">Outros</option>
					</select>
					<br /> <br />
					Data: <input type="text" name="txtdata" id="calendario" />	
					<br /> <br />
					<p>Mensagem:</p><br /><br /><textarea name="txtmen" cols="33" rows="7" placeholder="Especifique melhor o tipo de serviço desejado ou complemente com ideis ou caso deseja solicitar algum outro tipo de categoria que não esteja listado."></textarea>
					<br /> <br />
					<input type="submit" name="enivar" class="balanco envia" value="Enviar" />
					<input type="button" name="consulta" class="balanco user" value="Consultar" onclick="location.href='http://localhost/loginweb/usuario_view.php';"/>	
			</form>
		</div>
		<div class="body">
			<h1 class="nome">Bem vindo(a), <?php echo $_SESSION['login'];?></h1>
		</div>
	</body>
</html>
