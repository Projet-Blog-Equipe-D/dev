<?php 
	include_once "header.php";
?>

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