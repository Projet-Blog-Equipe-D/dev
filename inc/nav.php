<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
			</button>
		</div> 
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse"> 
			<form class="navbar-form navbar-left">
				<div class="form-group">
					<!-- Menu selection dynamique (catégories) en php -->
				</div> 
				<button type="submit" class="btn btn-default">Filtrer</button>
			</form>
			<ul class="navbar-right">
				<?php
					if (!isset($_SESSION['user'])){
						echo '<a href="vues/login.php"><li><i class="fa fa-sign-in" aria-hidden="true"></i>
CONNEXION</li></a>';
					}
					else{
						echo '<a href="controleurs/deconnexion.php"><li><i class="fa fa-sign-out" aria-hidden="true"></i>
							DECONNEXION</li></a>';
					}
				?>
			</ul>
		</div>
	</div>
</nav>