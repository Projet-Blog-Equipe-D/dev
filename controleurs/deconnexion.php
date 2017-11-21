<?php 
	include_once "../inc/classUser.php";;
	include_once "../inc/classUserQuery.php";
	session_start();
	include_once "../inc/pdo.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Importation BootStrap 3 -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		
		
		<!-- Importation de jQuery -->
		<script src="../js/jquery-3.2.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
	</head>

<?php 
	session_start();
	session_destroy();
	session_unset();
	header('Location: ../index.php');
 ?>