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
<<<<<<< HEAD
	
	if ($_POST['titre'] && $_POST['contenu']){
		$aq->ajoutArticle($art);
		echo "<p id='success'>L'article à bien été enregistrer !</p>";
=======

	// var_dump($art);
	if ($aq->ajoutArticle($art)) {
		echo "<p id='success'>L'article à bien été enregistré !</p>";
>>>>>>> cdbd36376442f4222eb1f5e866f2bd87dd6320af
	} else {
		echo "<p id='error'>Impossible d'enregistrer l'article !</p>";
		
	}


?>