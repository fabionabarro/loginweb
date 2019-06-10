
<!DOCTYPE html>
<html>
	<head>
  		<meta charset="UTF-8">
  		<title>cadastro</title>
  		<link rel="stylesheet" type="text/css" href="CSS/style.css">
  		<script type="text/javascript">
			function validar(){
				var n, e, l, s, cs, c, t, en;
				
				n = document.form.txtnome.value;
				
				if(n.length == 0){
					alert("Campo nome é obrigatório.");
					document.form.txtnome.focus();
					return false;
				}

				l = document.form.txtlogin.value;
				
				if(l == ''){
					alert("Campo login é obrigatório.");
					document.form.txtlogin.focus();
					return false;
				}

				s = document.form.txtsenha.value;
				
				if(s == ''){
					alert("Campo senha é obrigatório.");
					document.form.txtsenha.focus();
					return false;
				}

				cs = document.form.txtsenha2.value;
				
				if(cs == ''){
					alert("Campo senha é obrigatório.");
					document.form.txtsenha2.focus();
					return false;
				}

				c = document.form.txtcelular.value;
				
				if(c == ''){
					alert("Campo celular é obrigatório.");
					document.form.txtcelular.focus();
					return false;
				}

				t = document.form.txttelefone.value;
				
				if(t == ''){
					alert("Campo telefone é obrigatório.");
					document.form.txttelefone.focus();
					return false;
				}

				en = document.form.txtendereco.value;
				
				if(en == ''){
					alert("Campo endereço é obrigatório.");
					document.form.txtendereco.focus();
					return false;
				}
				
				e = document.form.txtemail.value;
				
				if(e == "" || e.indexOf("@") < 0 ){
					alert("Preencha o campo Email corretamente.");
					document.form.txtemail.focus();
					return false;
				}

				if(cs != s ){
					alert("As senhas precisam ser iguais.");
					document.form.txtsenha2.focus();
					return false;
				}	

			}	
		</script>
	</head>
	<body>
		<header>
			<h1>Josimara Valim</h1>
		</header>
			<div class="body">
				<div class="login">
					<form name="form" method="POST" action="grava.php">
						<table class="table">
							<tr>
								<th ><span>Login:</span></th>
								<td>
									<input type="text" name="txtlogin" />
								</td>
							</tr>
							<tr>
								<th><span>Senha:</span></th>
								<td>
									<input type="password" name="txtsenha" />
								</td>
							</tr>
							<tr>
								<th><span>Confirmar senha:</span></th>
								<td>
									<input type="password" name="txtsenha2" />
								</td>
							</tr>
							<tr>
								<th><span>Nome:</span></th>
								<td>
									<input type="text" name="txtnome" />
								</td>
							</tr>
							<tr>
								<th><span>Email:</span></th>
								<td>
									<input type="text" name="txtemail" />
								</td>
							</tr>
							<tr>
								<th><span>Endereço:</span></th>
								<td>
									<input type="text" name="txtendereco" />
								</td>
							</tr>
							<tr>
								<th><span>Telefone:</span></th>
								<td>
									<input type="text" name="txttelefone" />
								</td>
							</tr>
							<tr>
								<th><span>Celular:</span></th>
								<td>
									<input type="text" name="txtcelular" />
								</td>
							</tr>
							<tr>
								<th></th>
								<td>
									<input type="submit" value="Cadastrar" name="enviar" class="balanco" onclick="return validar()"/>
								</td>
							</tr>
							<tr>
								<th></th>
								<td>
									<input type="button" value="Voltar" class="balanco2" onclick="location.href='http://localhost/loginweb/index.php';" /> 
								</td>
							</tr>
						</table>
					</form>
					<img src="Imagens/JV_fotografias.png" class="contato"/>
				</div>	
			</div>
	</body>
</html>
