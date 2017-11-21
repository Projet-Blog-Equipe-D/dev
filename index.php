<?php 
	include_once "inc/classUser.php";;
	include_once "inc/classUserQuery.php";
	session_start();
	include_once "inc/pdo.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<!-- Importation BootStrap 3 -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		
		<!-- Importation de jQuery -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body lang="fr">

		<header>
			<?php 
				include_once "inc/nav.php";
			?>
		</header>

		<?php
		$titre = "TEST";
		if(!empty($_GET)) {
			// faire qqchose
			echo 'qqchose';
		}else{
			require_once('./controleurs/liste.php');
			require_once('./vues/liste.php');
		}
		?> 

		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>