<?php
	$conn = pg_connect("host=localhost port=5432 dbname=livro user=postgres password=");
	$query = 'select codigo, nome from pessoas';
	$result = pg_query($conn, $query);
	
	if ($result){
		 while( $row = pg_fetch_assoc($result)){
			 echo $row['codigo'] . ' - ' . $row['nome']. "\n";
		 }
	}
	
	pg_close($conn);
?>