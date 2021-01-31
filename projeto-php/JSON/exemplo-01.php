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
	
	echo json_encode($pessoas);

 ?>