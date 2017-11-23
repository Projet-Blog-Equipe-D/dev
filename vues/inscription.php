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

	<body class="nopad">
		<header>
		</header>
		
		<div class="container-fluid vertical-center">
			<div class="row">
				<div class="col-md-12 text-center">
				<h1> <?php if (isset($_SESSION['user'])){echo $_SESSION["user"]->getMail();}  ?></h1>
					<div id="logination" class="">
						<form method="POST" action="../controleurs/nouvuser.php">
							<p>
								<input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" >
							</p>
							<p>
								<input type="text" name="login" id="login" placeholder="E-mail" >
							</p>
							<p>
								<input type="password" name="password" id="password" placeholder="Mot de passe">
							</p>
							<button type="submit" class="btn btn-login" id="validation">S'inscrire</button>
						</form>
						<?php
							if (isset($_SESSION['loginIns'])){
								echo '<p id="msgUser" class="alert alert-danger">';
									echo $_SESSION['loginIns'] ; 
								echo '</p>';
							}
						?>
					</div>
				</div>
			</div>		
		</div>


		<script type="text/javascript" src="../js/main.js"></script>
	</body>
</html>