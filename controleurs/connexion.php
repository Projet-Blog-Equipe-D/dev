<?php 
	include_once "../header.php";

	
	if (!empty($_POST)){
		$michel = new ClassUserQuery($pdo);
		if ($michel->connexion($_POST['login'],$_POST['password'])){
			header('Location: ../index.php');
		}
		else{
			header('Location: ../login.php');
		}
	}

 ?>