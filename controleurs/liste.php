<?php
	require_once('../inc/classArticle.php');
	require_once('../inc/classArticleQuery.php');
	session_start();
	include_once "../inc/pdo.php";
	
	$titre = "Blog Dovapi trop bien, t'as vu";
	
	if(!empty($_POST)) {
		if ($_POST['choix'] != "tout"){
			$aq = new ArticleQuery($bdd);
			$liste = $aq->getCategArticle(intval($_POST['choix']));
			include_once "../vues/liste.php";
		}
		else{
			$aq = new ArticleQuery($bdd);
			$liste = $aq->getListeArticles();
			include_once "../vues/liste.php";
		}
		
	}
	else{
		$aq = new ArticleQuery($bdd);
		$liste = $aq->getListeArticles();
		include_once "../vues/liste.php";

<<<<<<< HEAD
$aq = new ArticleQuery($bdd);
$liste = $aq->getListeArticles();
$titre = "salut";

// $cat = new CategorieQuery($bdd);
// $liste_categories = $cat->getLIsteCaterogies();
=======
	}

	
// $cat = new CategorieQuery($bdd);
// $liste_categories = $cat->getLIsteCategories();
>>>>>>> 0b481bdd4a1f1dd81049c006c5e88b7597f504b3

?>