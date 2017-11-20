<?php
	class ClassUserQuery{
		private $_bdd;
		public function __construct($_bdd){
			$this->_bdd = $_bdd;
		}
		
		public function connexion($mail,$mdp){
				$password = MD5($mdp);
				$req = $this->_bdd->prepare('SELECT * FROM users WHERE mail = :mail AND password = :password');
				$req->execute(array(
					'mail' => $mail,
					'password' => $password));
				$donnees = $req->fetch();
				
				if ($donnees != false){
					$user = new ClassUser($donnees);
					return $user;
					$_SESSION["userID"] = $donnees[0];
				}
		}

		public function deconnexion(){

		}
	}
?>