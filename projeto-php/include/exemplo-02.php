<?php 

	//include "exemplo-01.php"; //tenta funcionar mesmo sem funcionar ou existir o arquivo
	require "exemplo-01.php"; //obriga que o aequivo exista e funcione corretamentoe, caso contrario erro fatal

	$resultado = somar(10, 20);

	echo $resultado;
 
 ?>