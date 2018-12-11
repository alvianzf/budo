<?php

session_start();
include '../config/config.php';

$kode			= @$_POST['Reg'];
$kyu			= @$_POST['kyu'];
$sabuk			= @$_POST['sabuk'];
$sertifikat		= @$_POST['sertifikat'];
$ujian			= @$_POST['ujian'];


$go 	= @$_POST['go'];


if($go == "1")
{
	$sql = mysql_query("INSERT INTO ujian VALUES 
			(NULL, '$kode', '$kyu', '$sabuk', '$sertifikat', '$ujian')");

	if($sql)
	{
		
		header('location:../site.php?hal=riwayat&ref=success');
	}else
	{
		header('location:../site.php?hal=riwayat&ref=failed');
	}

	echo $tgl;
	echo '<br/>';
	echo $tanggallahir;
	echo '<br/>';
	echo $kode;
	echo '<br/>';
	echo $namasiswa;
	echo '<br/>';
	echo $tempatlahir;
	echo '<br/>';
	echo $ayah;
	echo '<br/>';
	echo $ibu;
	echo '<br/>';
	echo $alamat;
	echo '<br/>';
	echo $nomor;
}


?>