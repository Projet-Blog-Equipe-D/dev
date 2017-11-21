<?php 
	include_once "../inc/classUser.php";;
	include_once "../inc/classUserQuery.php";
	require_once('../inc/classArticle.php');
	require_once('../inc/classArticleQuery.php');
	session_start();
	include_once "../inc/pdo.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Importation BootStrap 3 -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="../css/viewarticle.css">
		
		
		<!-- Importation de jQuery -->
		<script src="../js/jquery-3.2.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
	</head>

<main>
	<?php

		$aq = new ArticleQuery($pdo);
		$liste = $aq->getArticle($_GET['id']);

		echo "<section class='container-fluid'>";
					echo "<div class='row'>";

						echo "<div class='col-md-12 col-xs-12 col-lg-12 col-sm-12 text-center'>";
							echo "<img src='http://via.placeholder.com/1200x500' alt='Image article'>";
						echo "</div>";

					echo "</div>";

					echo "<div class='row'>";

						echo "<div class='col-md-12 col-xs-12 col-lg-12 col-sm-12'>";
							// echo "<h1>".$titre."</h1>";
							echo '<article class="article" id="article-'.$liste->getIdArticle().'">';
								echo utf8_encode("<h2>".$liste->getTitre()."</h2>");
								echo utf8_encode("<p>".$liste->getContenu()."</p>");
							echo "</article>";

						echo "</div>";

					echo "</div>";

					echo "<div class='pull-right'>";
							echo '<a href="vues/deletearticle.php?id='.$liste->getIdArticle().'">'.'<button class="btn btn-danger">Supprimer</button>'.'</a>';
							echo '<a href="vues/editarticle.php?id='.$liste->getIdArticle().'">'.'<button class="btn btn-primary">Modifier</button>'.'</a>';
					echo "</div>";

				echo "</section>";
		
	?>
</main>