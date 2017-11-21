<?php
class categorieQuery{
	private $_pdo;
	public function __construct(PDO $pdo){
		$this->_pdo=$pdo;
	}
	public function getList(){
		$tab = [];
		$reponse=$this->_pdo->prepare('SELECT * FROM categories');
		$reponse->execute();
		while($donnees = $reponse->fetch()){
			
			$tab[] =$donnees;

		}
		$reponse->closeCursor();
		return $tab;
	}
}
?>