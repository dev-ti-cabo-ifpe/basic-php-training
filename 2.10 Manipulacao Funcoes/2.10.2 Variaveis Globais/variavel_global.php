<?php

	$total = 0;
	function km2mi($kilometros){
		global $total;
		$total += $kilometros;
		return $kilometros*0.6;
	}
	echo "percorrreu ". km2mi(100) . " milhas \n" ;
	echo "percorrreu ". km2mi(200) . " milhas \n" ;
	echo "percorrreu total ". $total . " km \n" ;
	
?>