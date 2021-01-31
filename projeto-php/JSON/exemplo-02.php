<?php 

	$json = '[{"nome":"Jo\u00e3o","idade":18},{"nome":"Fernanda","idade":30}]';

	$data = json_decode($json, true);

	print_r($data);

 ?>