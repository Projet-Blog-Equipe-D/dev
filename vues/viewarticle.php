<?php 
	include_once "../inc/classUser.php";;
	include_once "../inc/classUserQuery.php";
	require_once('../inc/classArticle.php');
	require_once('../inc/classArticleQuery.php');
	session_start();
	include_once "../inc/pdo.php";
	include_once "../inc/navviewarticle.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Importation BootStrap 3 -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../css/viewarticle.css">
		
		
		<!-- Importation de jQuery -->
		<script src="../js/jquery-3.2.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
	</head>

<main>
	<?php

		$aq = new ArticleQuery($bdd);
		$liste = $aq->getArticle($_GET['id']);

		$query = $bdd->query("SELECT * FROM articles WHERE id_article ='".$_GET['id']."'");

		$verifpage = $query->rowCount();

		// var_dump($verifpage);
		if ($verifpage == 0)
		{
			
		   include_once "../inc/error404.php";

		} else {
		  
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
							echo utf8_encode("<h2 name='titre' class='contentedit'>".$liste->getTitre()."</h2>");
							echo utf8_encode("<p class='contentedit' contenteditable='false' name='texte'>".$liste->getContenu()."</p>");
						echo "</article>";

					echo "</div>";

				echo "</div>";

						if (isset($_SESSION['user'])) {
							
							echo "<div class='pull-right'>";
									echo '<button class="btn btn-primary edit">Modifier</button>';
									echo '<button class="btn btn-success valid" art="'.$liste->getIdArticle().'">Valider</button>';
									echo '<button class="btn btn-danger delete" art="'.$liste->getIdArticle().'">Supprimer</button>';
							echo "</div>";

						} else {

						}




			echo "</section>";
		}
		
	?>
	<div id="affichage"></div>
</main>

<script type="text/javascript" src="../js/editarticle.js"></script>
<script type="text/javascript" src="../js/deletearticle.js"></script>