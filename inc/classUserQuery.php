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
					$_SESSION["user"] = $user;
					return $user;
				}
				return false;
		}

		public function deconnexion(){
			session_destroy();
			session_unset();
			header('Location: ../index.php');
		}
		
		public function inscription($donnees){
			$req = $this->_bdd->prepare("INSERT INTO `users` (mail, password, name) VALUES(:mail, :password, :name)");
			$req->bindParam(':mail', $donnees[0]);
			$req->bindParam(':password', $donnees[1]);
			$req->bindParam(':name', $donnees[2]);
			var_dump($donnees);
			if ($req->execute()){
				return true ;
			}
			else{
				return false ;
			}
		}
		
		public function isNameFree($name){
			$req = $this->_bdd->prepare('SELECT * FROM users WHERE name = :name');
			$req->execute(array('name' => $name));
			$donnees = $req->fetch();

			if ($donnees == false){
				return true;
			}
			else {
				return false;
			}
		}
		
		public function isMailFree($mail){
			$req = $this->_bdd->prepare('SELECT * FROM users WHERE mail = :mail');
			$req->execute(array('mail' => $mail));
			$donnees = $req->fetch();

			if ($donnees == false){
				return true;
			}
			else {
				return false;
			}
		}
	}
?>