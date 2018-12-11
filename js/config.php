<?php

$host	=	'localhost';
$user	=	'root';
$pass	=	'';
$db		=	'budo';

$conn   =	mysql_connect($host, $user, $pass);
$dbs	=	mysql_select_db($db);

?>