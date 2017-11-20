<?php 
	include_once "../header.php";
	
	session_destroy();
	session_unset();
	header('Location: ../index.php');
 ?>