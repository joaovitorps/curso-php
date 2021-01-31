<?php 

	function ola($text, $periodo = "Bom dia") {

		return "Olá $text! $periodo! <br>";

	}

	echo ola("Mundo");
	echo ola("", "Boa noite");
	echo ola("João", "Boa tarde");
	echo ola("Fernanda", "");

 ?>