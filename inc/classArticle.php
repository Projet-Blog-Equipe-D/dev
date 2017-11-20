<?php 

	class Article 
	{
		private $_id_article;
		private $_titre;
		private $_contenu;
		private $_categorie;
		private $_auteur;

		public function __construct($_id_article,$_titre,$_contenu,$_categorie,$_auteur)
		{
			$this->_id_article = $_id_article;
			$this->_titre = $_titre;
			$this->_contenu = $_contenu;
			$this->_categorie = $_categorie;
			$this->_auteur = $_auteur;
		}


	    public function getIdArticle()
	    {
	        return $this->_id_article;
	    }


	    public function getTitre()
	    {
	        return $this->_titre;
	    }


	    public function getContenu()
	    {
	        return $this->_contenu;
	    }


	    public function getCategorie()
	    {
	        return $this->_categorie;
	    }


	    public function getAuteur()
	    {
	        return $this->_auteur;
	    }


	    public function setIdArticle($_id_article)
	    {
	        $this->_id_article = $_id_article;

	        return $this;
	    }


	    public function setTitre($_titre)
	    {
	        $this->_titre = $_titre;

	        return $this;
	    }


	    public function setContenu($_contenu)
	    {
	        $this->_contenu = $_contenu;

	        return $this;
	    }


	    public function setCategorie($_categorie)
	    {
	        $this->_categorie = $_categorie;

	        return $this;
	    }


	    public function setAuteur($_auteur)
	    {
	        $this->_auteur = $_auteur;

	        return $this;
	    }
}

?>