<?php

include 'config/config.php';

$i = @$_GET['i'];
$del	= mysql_query("DELETE FROM iuran WHERE ID = '".$i."'");

if ($del)
{
	echo 'berhasil delete';
	header('location:site.php?hal=iuran&ref=success');
}else
{
	echo "gagal delete";
	echo $i;

	header('location:site.php?hal=iuran&ref=failed');
}

?>