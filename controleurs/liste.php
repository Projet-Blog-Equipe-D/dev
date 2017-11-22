<?php
require_once('./inc/classArticle.php');
require_once('./inc/classArticleQuery.php');

$aq = new ArticleQuery($bdd);
$liste = $aq->getListeArticles();
$titre = "salut";

// $cat = new CategorieQuery($bdd);
// $liste_categories = $cat->getLIsteCaterogies();

?>