<?php
	include "abrir_banco.php";
	$executa = "select data from consulta";
	$query = mysqli_query($mysqli, $executa);
	$datas = array(); 
	$cont = 0;
	global $cont2;

	if(mysqli_num_rows($query)>0){
		while ($row = mysqli_fetch_assoc($query)){
			$datas[] = $row;
			$cont2 += 1;
		}
	}

	for($cont == 0; $cont < $cont2; $cont++)
		if (array_key_exists("25/06/2019", $datas[$cont])){
			echo "Data encontrada";
			break;
		}	
	}	
?>
