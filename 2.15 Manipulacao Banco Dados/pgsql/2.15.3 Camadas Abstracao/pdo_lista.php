<?php
	try{
		$conn = new PDO("pgsql: host=localhost; port=5432; dbname=livro; user=postgres; password=");
		$results  = $conn->query("select codigo, nome from pessoas");	
		
		foreach($results as $row){
			echo $row['codigo'] . ' - ' . $row['nome'] . "\n";
		}
		$conn = null;
	}catch(PDOException $e){
		print "Erro! " . $e->getMessage() .  "\n";
		die();
	}
?>