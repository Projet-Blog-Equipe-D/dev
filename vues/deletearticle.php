<?php 
	include_once "../inc/classUser.php";;
	include_once "../inc/classUserQuery.php";
	require_once('../inc/classArticle.php');
	require_once('../inc/classArticleQuery.php');
	session_start();
	include_once "../inc/pdo.php";

	$aq = new ArticleQuery($bdd);
	$art = $aq->getArticle($_POST['id']);

	// var_dump($art);	
	$aq->supprArticle($art);
?>
