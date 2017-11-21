<main>
	<?php
		foreach ($liste as $art) {
			echo "<section class='container-fluid'>";
				echo "<div class='row'>";
					echo "<div class='col-md-2 col-xs-12 col-lg-2 col-sm-12 text-center'>";
						echo "<img src='http://via.placeholder.com/180x150' alt='Image article'>";
					echo "</div>";
					echo "<div class='col-md-10 col-xs-12 col-lg-10 col-sm-12'>";
						// echo "<h1>".$titre."</h1>";
						echo '<article class="article" id="article-'.$art->getIdArticle().'">';
							// echo $art->getIdArticle();
							echo utf8_encode("<h2>".$art->getTitre()."</h2>");
							echo utf8_encode($art->getContenu());
						echo "</article>";
					echo "</div>";
			echo "</section>";
		}

	?>
</main>