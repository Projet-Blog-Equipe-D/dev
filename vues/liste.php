	<body>
		
		<h1><?php echo $titre; ?></h1>
		<?php
			foreach ($liste as $art) {
				echo "<section class='container'>";
					echo "<div class='row'>";
					echo "<div class='col-md-10 col-xs-10 col-lg-10 col-sm-10'>";
						echo '<article class="article" id="article-'.$art->getIdArticle().'">';
							// echo $art->getIdArticle();
							echo $art->getTitre();
							echo $art->getContenu();
						echo "</article>";
					echo "</div>";
				echo "</section>";
			}

		?>

	</body>
</html>