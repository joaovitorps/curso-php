<?php 

	function soma(float ...$valores) {

		return array_sum($valores);

	} 

	echo soma(2,5,2,9);
	echo "<br>";
	echo soma(2.5,3.3);		
	echo "<br>";
	echo soma(1.5,3.2); //quando int, ignora ponto flutuante e soma oq tem antes no ponto
	echo "<br>";

 ?>