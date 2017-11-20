<?php 
	include_once "header.php";
	include_once "inc/classUser.php";;
	include_once "inc/classUserQuery.php";


 ?>

	<body>
		<header>
		</header>
		
		<main>
			<div class="container-fluid" >
				<div class="row">
					<div class="col-md-12 text-center">
						<div id="logination">
							<p>
								<input type="text" name="login" id="login" placeholder="E-mail" >
							</p>
							<p>
								<input type="password" name="password" id="password" placeholder="Mot de passe">
							</p>
							<button class="btn btn-login" id="validation">Se connecter</button>
			
						</div>
					</div>
				</div>		
			</div>
		</main>


		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>