<?php 

//$ts = strtotime("2001-09-11");
$ts = strtotime("+1 week 2 days 4 hours 2 seconds");

echo date("l, d/m/Y", $ts);

 ?>