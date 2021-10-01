<?php
	$conn = pg_connect("host=localhost port=5432 dbname=livro user=postgres password=");
	pg_query($conn, "INSERT into pessoas (codigo, nome) values (1, 'Érico Verissimo') ");
	pg_close($conn);
?>