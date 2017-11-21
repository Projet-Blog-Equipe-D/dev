<?php 
	include_once "header.php";
	if (isset($_SESSION['user'])){
		header('Location: index.php');;
	} 
 ?>

	<body>
		<header>
		</header>
		

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 text-center">
					<div id="logination">
						<form method="POST" action="controleurs/connexion.php">
							<p>
								<input type="text" name="login" id="login" placeholder="E-mail" >
							</p>
							<p>
								<input type="password" name="password" id="password" placeholder="Mot de passe">
							</p>
							<button type="submit" class="btn btn-login" id="validation">Se connecter</button>
						</form>
						<div id="msgUser">
							<?php if (isset($msgUser)){echo $msgUser ;} ?>
						</div>
						<a href="inscription.php">Pas encore inscrit ?</a>
					</div>
				</div>
			</div>		
		</div>
	</body>
</html>