<?php 

$meses = array(
	"Janeiro", "Fevereiro", "Março",
	"Abril", "Maio", "Junho",
	"Julho", "Agosto", "Setembro",
	"Outubro", "Novembro", "Dezembro"
);

foreach ($meses as $index => $mes) {
	echo "<br>Indice: ".$index;
	echo "<br>O mês é: ".$mes."<br>";
}

?>