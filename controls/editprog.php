<?php

session_start();
include '../config/config.php';

$id             = @$_GET['id'];
$keterangan 	= @$_POST['keterangan'];
$program		= @$_POST['prog'];
$iuran			= @$_POST['iuran'];

$go 	= @$_POST['go'];


if($go == "1")
{
	$sql = mysql_query("UPDATE program SET 	program	= '".$program."',
											harga = '".$iuran."',
										 	keterangan 	= '".$keterangan."'
											
										 	WHERE ID = '".$id."' ");

	if($sql)
	{
		
		header('location:../site.php?hal=program&ref=success');
	}else
	{
        header('location:../site.php?hal=program&ref=failed');
     

	}
}


?>