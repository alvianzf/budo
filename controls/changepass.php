<?php


session_start();
include '../config/config.php';

$id 			= @$_GET['id'];
$namasaja 		= @$_POST['justname'];
$insta			= @$_POST['instagram'];
$username		= @$_POST['username'];
$password		= @$_POST['password'];

$go				= @$_POST['go'];

if($go == '1')
{
	$abc = mysql_query("UPDATE users SET 	nama	 = '".$namasaja."',
										 	username = '".$username."',
										 	insta	 = '".$insta."',
										 	pass	 = '".$password."'
										 	
										 	WHERE ID = '".$id."' ");

	if($abc)
	{
		header('location:../site.php?hal=users&ref=1');
	}else
	{
		header('location:../site.php?hal=users&ref=0');
	}

}

?>