	<body>
		
		<h1><?php echo $titre; ?></h1>
		<?php
			foreach ($liste as $art) {
				echo '<article id="article-'.$art->getIdArticle().'">';
				// echo $art->getIdArticle();
				echo $art->getTitre();
				echo $art->getContenu();
				echo "</article>";
			}

		?>

	</body>
</html>