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

	
	if (!empty($_POST)){
		// $user = new ClassUser($donnees);
		$donnees = [];
		if (!empty($_POST['login']) && preg_match("/^[a-zA-Z0-9._-]+@[a-z0-9_-]+\.[a-z]{2,6}$/", $_POST['login'])){
			$donnees[] = $_POST['login'];
		}
		if (!empty($_POST['password'])){
			$donnees[] = MD5(htmlspecialchars($_POST['password']));
		}
		if (!empty($_POST['pseudo'])){
			$donnees[] = utf8_decode(ucfirst(htmlspecialchars($_POST['pseudo'])));
		}
		if (!empty($donnees)){
			$jean = new ClassUserQuery($bdd);
			if ($jean->inscription($donnees)){
				header('Location: ../vues/login.php');
			}
			else{
				header('Location: ../vues/inscription.php');
			}
		}
	}
[]
 ?>