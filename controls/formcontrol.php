<?php

session_start();
include '../config/config.php';

$kode			= "BA".@$_GET['id'];
$program		= @$_POST['program'];
$namasiswa		= @$_POST['namasiswa'];
$kelamin		= @$_POST['kelamin'];
$tempatlahir	= @$_POST['tempatlahir'];
$tanggallahir	= @$_POST['tanggallahir'];
$ayah			= @$_POST['ayah'];
$ibu			= @$_POST['ibu'];
$alamat			= @$_POST['alamat'];
$nomor			= @$_POST['Nomor'];

$tgl 	= date('Y-m-d');

$go 	= @$_POST['go'];


if($go == "1")
{
	$sql = mysql_query("INSERT INTO kelas VALUES 
			(NULL, '$kode', '$program', '$namasiswa', '$kelamin', '$tempatlahir',
			'$tanggallahir', '$alamat', '$ayah', '$ibu', '$nomor', '$tgl')");

	if($sql)
	{
		
		header('location:../site.php?hal=siswa&ref=success');
	}else
	{
		header('location:../site.php?hal=siswa&ref=failed');
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