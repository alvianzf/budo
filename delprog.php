<?php

include 'config/config.php';

$i = @$_GET['ID'];
$del	= mysql_query("DELETE FROM program WHERE ID = '".$i."'");

if ($del)
{
	echo 'berhasil delete';
	header('location:site.php?hal=program&ref=success');
}else
{
	echo "gagal delete";
	echo $i;

	header('location:site.php?hal=program&ref=failed');
}

?>