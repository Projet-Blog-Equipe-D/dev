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
		unset($_SESSION['loginIns']);
		$jean = new ClassUserQuery($bdd);
		
		$email = trim($_POST['login']);
		$pseudo = utf8_decode(ucfirst(htmlspecialchars(trim($_POST['pseudo']))));
		$mdp = MD5(htmlspecialchars($_POST['password']));
		
		if (empty($_POST['login'])){
			$_SESSION['loginIns'] = "Choisissez un E-mail ! <br>";
		}
		elseif(!preg_match("/^[a-zA-Z0-9._-]+@[a-z0-9_-]+\.[a-z]{2,6}$/", $_POST['login'])){
			$_SESSION['loginIns'] .= "E-mail incorrect. <br>";
		}
		else{
			$donnees[] = $email;
		}
		
		if (empty($_POST['password'])){
			$_SESSION['loginIns'] .= "Vous avez oubliez votre mot de passe ! <br>";
		}
		else{
			$donnees[] = $mdp;
		}
		
		if (empty($_POST['pseudo'])){
			$_SESSION['loginIns'] .= "Et votre pseudo ? <br>";
		}
		else{
			
			$donnees[] = $pseudo;
		}
		
			
		if (!isset($_SESSION['loginIns'])){
			if($jean->isMailFree($email)){
				if ($jean->isNameFree($pseudo)){
					if ($jean->inscription($donnees)){
						$_SESSION['insSuccess'] = "Inscription réussie. Bienvenue !";
						header('Location: ../vues/login.php');
					}
					else{
						$_SESSION['loginIns'] = "Erreur lors de la requête";
						header('Location: ../vues/inscription.php');
					}
				}
				else{
					$_SESSION['loginIns'] = "Pseudo déjà utilisé.";
					header('Location: ../vues/inscription.php');
				}
			}
			else{
				$_SESSION['loginIns'] = "E-mail déjà utilisé.";
				header('Location: ../vues/inscription.php');
			}
		}
		else{
			header('Location: ../vues/inscription.php');
		}
	}
[]
 ?>