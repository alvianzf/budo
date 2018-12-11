<?php

include 'config/config.php';
session_start();

$id = @$_GET['id'];

$qry	= mysql_query("SELECT * FROM users WHERE ID = '".$id."' ");
$data	= mysql_fetch_assoc($qry);

$_SESSION ['username'] 	= $data['username'];
$_SESSION ['nama']		= $data['nama'];
$_SESSION ['role']		= $data['role'];
$_SESSION['pic']		= $data['pic'];
$_SESSION['insta']		= $data['insta'];
$_SESSION['pass']		= $data['pass'];
$_SESSION['id']			= $data['ID'];

header('location:site.php');

if(! $_SESSION['nama'])
{header('location:login/');}

?>