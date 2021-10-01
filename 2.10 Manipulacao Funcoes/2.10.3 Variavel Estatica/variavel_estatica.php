<?php

	$total = 0;
	function percorre($kilometros){
		static $total;
		$total += $kilometros;
		echo "percorre mais $kilometros do tota de $total\n";
	}
	percorre(100);
	percorre(200);
	percorre(50);
	
?>
