<?php 
	include_once "../inc/classUser.php";
	include_once "../inc/classUserQuery.php";
	require_once('../inc/classArticle.php');
	require_once('../inc/classArticleQuery.php');
	session_start();
	include_once "../inc/pdo.php";

	$aq = new ArticleQuery($bdd);
	$art = $aq->getArticle($_POST['id']);

	if (isset($_SESSION['user'])){
		if (($art->getAuteur()) == ($_SESSION["user"]->getUserId())){
			$art->setTitre(utf8_decode($_POST['titre']));
			$art->setContenu(utf8_decode($_POST['contenu']));

			$aq->modifierArticle($art);

		}
		else{
			echo '<p class="alert alert-danger">Vous n\'avez pas les permissions nécessaires.</p>';
		}
	}
	else{
		echo '<p class="alert alert-danger">Vous devez être connecté pour modifier un article.</p>';
	}

?>
