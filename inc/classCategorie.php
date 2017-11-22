<?php
  class categorie{
     
  	private $_id;
  	private $_nom;

  	public function getId(){
  	       return $this->_id;	
  	}
  	public function getNom(){
  		   return $this->_nom;
  	}
  	public function setid($id){
  		   $this->_id=$id;
  	}
  	public function setNom($nom){
  		   $this->_nom=$nom;
  	}
  	function __construct($donnees){
  		   $this-> setId($donnees[0]);
  		   $this-> setNom($donnees[1]);
  	}
  }
?>