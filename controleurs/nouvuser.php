<?php 
	include_once "../header.php";

	
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
			$jean = new ClassUserQuery($pdo);
			if ($jean->inscription($donnees)){
				header('Location: ../login.php');
			}
			else{
				header('Location: ../inscription.php');
			}
		}
	}
[]
 ?>