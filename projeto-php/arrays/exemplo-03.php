<?php 

	$pessoas = array();

	array_push($pessoas, array(

		'nome' => "João",
		'idade' => 18
	));

	array_push($pessoas, array(

		'nome' => "Fernanda",
		'idade' => 30
	));
	
	print_r($pessoas[1]['idade']);

 ?>