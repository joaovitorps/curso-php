<?php 

	$resultado0 = (10 + 3) / 2 > 5 && 10 + 5 < 3;

	$resultado1 = (10 + 3) / 2 > 5 || 10 + 5 < 3;

	$resultado2 = (10 + 3) / 2 > 5 ?? 10 + 5 < 3;

	var_dump($resultado0);

	echo "<br/>";
	
	var_dump($resultado1);
	
	echo "<br/>";

	var_dump($resultado2);

 ?>