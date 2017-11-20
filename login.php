<?php 
	include_once "header.php";


	if (!empty($_POST)){
		$michel = new ClassUserQuery($pdo);
		if ($michel->connexion($_POST['login'],$_POST['password'])){
			
		}
	}

 ?>

	<body>
		<header>
		</header>
		
		<main>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 text-center">
					<h1> <?php if (isset($_SESSION['user'])){var_dump($_SESSION["user"]->getMail());}  ?></h1>
						<div id="logination">
							<form method="POST">
								<p>
									<input type="text" name="login" id="login" placeholder="E-mail" >
								</p>
								<p>
									<input type="password" name="password" id="password" placeholder="Mot de passe">
								</p>
								<button type="submit" class="btn btn-login" id="validation">Se connecter</button>
							</form>
						</div>
					</div>
				</div>		
			</div>
		</main>


		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>