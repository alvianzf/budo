<?php

session_start();
include '../config/config.php';

$prog			= @$_POST['prog'];
$keterangan		= @$_POST['keterangan'];
$iuran			= @$_POST['iuran'];


$go 	= @$_POST['go'];


if($go == "1")
{
	$sql = mysql_query("INSERT INTO program VALUES 
			(NULL, '$prog', '$iuran', '$keterangan')");

	if($sql)
	{
		
		header('location:../site.php?hal=program&ref=success');
	}else
	{
		header('location:../site.php?hal=program&ref=failed');
	}

}


?>