<?php

session_start();
include '../config/config.php';

$id 			= @$_GET['id'];
$program		= @$_POST['program'];
$namasiswa		= @$_POST['namasiswa'];
$kelamin		= @$_POST['kelamin'];
$tempatlahir	= @$_POST['tempatlahir'];
$tanggallahir	= @$_POST['tanggallahir'];
$ayah			= @$_POST['ayah'];
$ibu			= @$_POST['ibu'];
$alamat			= @$_POST['alamat'];
$nomor			= @$_POST['Nomor'];

$go 	= @$_POST['go'];


if($go == "1")
{
	$sql = mysql_query("UPDATE kelas SET 	program	= '".$program."',
										 	nama 	= '".$namasiswa."',
										 	kelamin	= '".$kelamin."',
										 	ayah	= '".$ayah."',
										 	ibu 	= '".$ibu."',
										 	alamat 	= '".$alamat."',
										 	tempat_lahir = '".$tempatlahir."',
										 	tanggal_lahir= '".$tanggallahir."',
										 	nomor_kontak = '".$nomor."'

										 	WHERE ID = '".$id."' ");

	if($sql)
	{
		
		header('location:../site.php?hal=siswa&ref=updatesuccess');
	}else
	{
		header('location:../site.php?hal=siswa&ref=updatefailed');

	}
	echo $tanggallahir;
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