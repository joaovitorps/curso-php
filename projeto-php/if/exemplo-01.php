<?php 

	$idade = $_GET['i'];

	if ($idade > 0 && $idade < 18) {
		echo "Menor de idade";
	}

	elseif ($idade >= 18 && $idade < 65) {
		echo "Maior de idade";
	}

	elseif ($idade >= 65 && $idade <= 117) {
		echo "Melhor idade";
	}

	else{
		echo "Idade inválida";
	}

	echo "<br>";

	echo ($idade > 18) ? "Maior de idade" : "voce nao é maior de idade ainda";
 ?>