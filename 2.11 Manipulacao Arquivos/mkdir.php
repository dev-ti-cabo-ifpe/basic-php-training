<?php
	
	$dir= "C:/xampp/htdocs/test/2.11 Manipulacao de Arquivos/diretorio";
	
	if(mkdir($dir, 0777)){
		echo "Criado com sucesso";
	}else{
		echo "Criado não sucesso";
	}

?>