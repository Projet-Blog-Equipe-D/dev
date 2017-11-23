<?php 

	class ArticleQuery
	{
	 	private $_bdd;

	 	public function __construct($bdd)
	  	{
	    	$this->setBdd($bdd);
	  	}

		public function ajoutArticle(Article $article)
		{
			$q = $this->_bdd->prepare('INSERT INTO articles(titre, contenu, categorie, auteur) VALUES(:titre, :contenu, :categorie, :auteur)');

			$q->bindValue(':titre', $article->getTitre());
		    $q->bindValue(':contenu', $article->getContenu());
		    $q->bindValue(':categorie', $article->getCategorie());
			$q->bindValue(':auteur', $article->getAuteur());

		    if ($q->execute()){
		    	return true;
		    }
		    else{
		    	return false;
		    }
		}

		public function modifierArticle(Article $article)
		{

			$q = $this->_bdd->prepare('UPDATE articles SET titre = :titre, contenu = :contenu WHERE id_article ='.$article->getIdArticle());

			$q->bindValue(':titre', $article->getTitre());
		    $q->bindValue(':contenu', $article->getContenu());

		    $q->execute();

		}

		public function supprArticle(Article $article)
		{
			$q = $this->_bdd->prepare('DELETE FROM articles WHERE id_article = '.$article->getIdArticle());


			if ($q->execute()) {
				return true;
			} else {
				return false;
			}

		}

		public function getArticle($id)
		{
			$req = "SELECT * FROM articles WHERE id_article=".$id;
			$q = $this->_bdd->query($req);
			$a = $q->fetch();
			return new Article($a['id_article'], $a['titre'], $a['contenu'], $a['categorie'], $a['auteur']);
		}
		
		public function getCategArticle($id)
		{
			$listeArticles = [];
			$req = "SELECT * FROM articles WHERE categorie=".$id;
			$q = $this->_bdd->query($req);

			while ($a = $q->fetch()) {
				$listeArticles[] = new Article($a['id_article'], $a['titre'], $a['contenu'], $a['auteur'], $a['categorie']);
			}
			
			return $listeArticles;
		}

		public function getListeArticles()
		{
			$listeArticles = [];
			$req = "SELECT * FROM articles";
			$q = $this->_bdd->query($req);

			while ($a = $q->fetch()) {
				$listeArticles[] = new Article($a['id_article'], $a['titre'], $a['contenu'], $a['auteur'], $a['categorie']);
			}

			return $listeArticles;
		}


		public function setBdd($bdd) {
			$this->_bdd = $bdd;
		}
	}
	
?>