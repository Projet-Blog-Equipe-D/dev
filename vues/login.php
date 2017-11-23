<?php 
	include_once "../inc/classUser.php";
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
	if (isset($_SESSION['user'])){
		header('Location: ../index.php');;
	} 
 ?>

	<body class="nopad">
		<div class="container-fluid vertical-center">
			<div class="row">
				<div class="col-md-12 text-center">
					<div id="logination">
						<form method="POST" action="../controleurs/connexion.php">
							<p>
								<input type="text" name="login" id="login" placeholder="E-mail" >
							</p>
							<p>
								<input type="password" name="password" id="password" placeholder="Mot de passe">
							</p>
							<button type="submit" class="btn btn-login" id="validation">Se connecter</button>
						</form>
						<?php
							if (isset($_SESSION['loginErr'])){
								echo '<p id="msgUser" class="alert alert-danger">';
									echo $_SESSION['loginErr'] ; 
								echo '</p>';
							}
							if (isset($_SESSION['insSuccess'])){
								echo '<p id="msgUser" class="alert alert-success">';
									echo $_SESSION['insSuccess'] ; 
								echo '</p>';
								unset($_SESSION['insSuccess']);
							}
							else{
								echo '<a href="inscription.php">Pas encore inscrit ?</a>';
							}
						?>
						
					</div>
				</div>
			</div>		
		</div>
	</body>
</html>