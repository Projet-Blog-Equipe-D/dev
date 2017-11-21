<?php 
	
	require_once('../header.php');
	require_once('../inc/classArticle.php');
	require_once('../inc/classArticleQuery.php');

	$aq = new ArticleQuery($pdo);
	$liste = $aq->getArticle($_GET['id']);

	echo "<section class='container-fluid'>";
				echo "<div class='row'>";

					echo "<div class='col-md-2 col-xs-12 col-lg-2 col-sm-12 text-center'>";
						echo "<img src='http://via.placeholder.com/180x150' alt='Image article'>";
					echo "</div>";

					echo "<div class='col-md-10 col-xs-12 col-lg-10 col-sm-12'>";
						// echo "<h1>".$titre."</h1>";
						echo '<article class="article" id="article-'.$liste->getIdArticle().'">';
							// echo $art->getIdArticle();
							echo utf8_encode("<h2>".$liste->getTitre()."</h2>");
							echo utf8_encode("<p>".$liste->getContenu()."</p>");
						echo "</article>";

					echo "</div>";

				echo "</div>";

			echo "</section>";
	
?>