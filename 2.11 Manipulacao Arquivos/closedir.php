<?php
	
	$dir = "C:/xampp/htdocs/test/2.11 Manipulacao de Arquivos/diretorio";
	$id_dir = opendir($dir) ;
	echo closedir($id_dir) ;
	
?>