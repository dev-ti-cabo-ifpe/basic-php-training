<?php
	try{
		$conn = new PDO("pgsql: host=localhost; port=5432; dbname=livro; user=postgres; password=");
		$conn->exec("INSERT into pessoas (codigo, nome) values (1, 'Érico Verissimo')");
	}catch(PDOException $e){
		print "Erro! " . $e->getMessage() .  "\n";
		die();
	}
?>