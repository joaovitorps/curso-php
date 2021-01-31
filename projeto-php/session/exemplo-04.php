<?php 

	session_id('6fm9r0otifd4lkfkephr7e6n4carray');

	require_once 'config.php';

	session_regenerate_id();

	echo session_id();

	var_dump($_SESSION);

 ?>