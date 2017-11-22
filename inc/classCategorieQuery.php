<?php
class categorieQuery{
	private $_bdd;
	public function __construct($bdd){
		$this->_bdd=$bdd;
	}
	public function getList(){
		$tab = [];
		$reponse=$this->_bdd->prepare('SELECT * FROM categories');
		$reponse->execute();
		while($donnees = $reponse->fetch()){
			
			$tab[] =$donnees;

		}
		$reponse->closeCursor();
		return $tab;
	}
}
?>