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

echo"<form action='usuario_view.php'>";
  echo  "<input type='submit' value='Consulta' />";
echo"</form>";
echo "</fieldset>";

