<?php
	
	$arquivo= "C:/xampp/htdocs/test/2.11 Manipulacao de Arquivos/test.txt";
	
	if(is_file($arquivo)){
		echo "Arquivo É um Arquivo";
	}else{
		echo "Arquivo Não É um Arquivo";
	}

?>