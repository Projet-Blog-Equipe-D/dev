<?php 
	
	include_once "../inc/classUser.php";
	include_once "../inc/classUserQuery.php";
	require_once('../inc/classArticle.php');
	require_once('../inc/classArticleQuery.php');
	session_start();
	include_once "../inc/pdo.php";


	$aq = new ArticleQuery($bdd);
	$art = new Article(

		NULL,
		utf8_decode($_POST['titre']),
		utf8_decode($_POST['contenu']),
		utf8_decode($_POST['categorie']),
		$_SESSION["user"]->getUserId()

	);
	
	if ($_POST['titre'] && $_POST['contenu']){
		$aq->ajoutArticle($art);
		echo "<p id='success'>L'article à bien été enregistrer !</p>";
	} else {
		echo "<p id='error'>Impossible d'enregistrer l'article !</p>";
		
	}


?>