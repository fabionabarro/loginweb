<?php
session_start();
include('verifica1.php');



?>

<!DOCTYPE html>
<html>
	<head>
	  	<meta charset="UTF-8">
	  	<title>Projeto</title>
	  	<style type="text/css">
	  		@import url('https://fonts.googleapis.com/css?family=Julius+Sans+One');
			@font-face{
				font-family: 'Selima';
				src: url('Selima.otf') format('opentype');
			}

			*{
				margin: 0px;
				padding: 0px;
			}

			body{
				background: white;
			}

			.body{
				position: absolute;
				top: 0%;
				left: 0%;
				margin: 75px 0px 0px 40px;
				width: 94.3%;
				height: 505px;
				background: rgba(207, 207, 207,.4);
				box-shadow: 5px 5px 15px 5px rgba(0,0,0,.7);
				background-size: cover;
				z-index: 0;
			}

			img{
				position: absolute;
				padding: 0px;
				margin: 0px;
				top: -125%;
				box-shadow: 5px 5px 15px 5px rgba(0,0,0,.7);
			}

			.login{
				position: absolute;
				top: 55% ;
				left: 38%;
				height: auto;
				width: auto;
			}

			.table th{
				text-align: right;
			}

			.login span{
				color: #000;
				font-size: 30px;
				width: 50%;
			}

			.login input[type=button]{
				position: relative;
				left: 182px;
				top: -49px;
				border: 1px solid black;
				border-radius: 4px;
				width: 140px;
				height: 40px;
				background: rgba(0,0,0,.7);
				color: white;
				box-shadow: 2px 2px 2px 2px black;
				transition: 0.8s;
				cursor: pointer;
			}

			.login input[type=submit]{
				font-family: 'Exo', sans-serif;
				position: relative;
				margin-right: 20px;
				border: 1px solid black;
				border-radius: 4px;
				left: 5px;
				width: 140px;
				height: 40px;
				background: rgba(0,0,0,.7);
				color: white;
				box-shadow: 2px 2px 2px 2px black;
				transition: 0.8s;
				cursor: pointer;
			}

			.login input{
				width: 330px;
				height: 35px;
				background: transparent;
				border: 3px solid rgba(0,0,0,.7);
				border-radius: 2px;
				font-family: 'Exo', sans-serif;
				font-size: 28px;
				padding: 4px;
				margin-top: 10px;
			}

			.login span{
				color: rgba(0,0,0,.7);
			}

			.login input[type=submit]:hover{
				opacity: 0.8;
			}

			.login input[type=submit]:active{
				opacity: 0.6;
			}

			.login input[type=button]:hover{
				opacity: 0.8;
			}

			.login input[type=button]:active{
				opacity: 0.6;
			}

			.login input[type=text]:focus{
				border: 2px solid rgba(0,0,0,0.4);
			}

			.login input[type=password]:focus{
				outline: none;
				border: 2px solid rgba(0,0,0,0.4);
			}

			.login_erro{
				font-family: 'Exo', sans-serif;
				font-size: 27px; 
				color: #000;
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
		</style>
	</head>
	<body>
		<header>
			<h1>Josimara Valim</h1>
		</header>
  			<div class="body">
				<div class="login">
					<form method="POST" action="conectar.php">
						<img src="Imagens/JV_fotografias.png" >
						<input type="text" placeholder="Login" name="login" /><br />
						<input type="password" placeholder="Senha" name="senha" /><br />
						<input type="submit" class="balanco" value="Login" /><br />
						<input type="button" class="balanco2 "value="Cadastro" onclick="location.href='http://localhost/loginweb/cadastro.php';" />
						<?php
	                	    if(isset($_SESSION['nao_autenticado'])):
	                	?>
	                 	   <div class="login_erro">
	                  	    <p>ERRO: Usuário ou senha inválidos.</p>
	                   	 </div>
	                	<?php
	                   	 	endif;
	                    	unset($_SESSION['nao_autenticado']);
						?>
					</form>
				</div>
			</div>
	</body>
</html>
