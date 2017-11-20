<?php
require_once('./inc/classArticle.php');
require_once('./inc/classArticleQuery.php');

$aq = new ArticleQuery($pdo);
$liste = $aq->getListeArticles();
$titre = "salut";

// $cat = new CategorieQuery($pdo);
// $liste_categories = $cat->getLIsteCaterogies();

?>