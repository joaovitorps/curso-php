<?php 

/*	$anoNascimento = 2000;

	$nomeCompleto = "";

	$nome1 = "joao";*/

	//Na linha de baixo temos uma variavel com numero no nome
	$nome1 = "João";

	$sobrenome = "Vítor";

	$nomeCompleto = $nome1 . " " . $sobrenome;

	echo "$nomeCompleto";

	exit;

	echo $nome1;

	echo "<br/>";

	//unset($nome1);

	if (isset($nome1)) {
		echo $nome1;
	}

 ?>