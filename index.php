<?php 
include_once "header.php";

?>

	<body lang="fr">

		<main>
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

		</main>

		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>