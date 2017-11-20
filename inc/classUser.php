<?php
	class ClassUser{
		private $_userId;
		private $_mail;
		private $_password;
		private $_pseudo;
		
		public function __construct($donnees){
			$this->_userId = $donnees[0];
			$this->_mail = $donnees[1];
			$this->_password = $donnees[2];
			$this->_pseudo = $donnees[3];
		}
	

		public function getUserId(){
			return $this->_userId;
		}
		public function setUserId($_userId){
			$this->_userId = $_userId;
			return $this;
		}
		
		public function getMail(){
			return $this->_mail;
		}
		public function setMail($_mail){
			$this->_mail = $_mail;
			return $this;
		}
		
		public function getPassword(){
			return $this->_password;
		}
		public function setPassword($_password){
			$this->_password = $_password;
			return $this;
		}
		
		public function getPseudo(){
			return $this->_pseudo;
		}
		public function setPseudo($_pseudo){
			$this->_pseudo = $_pseudo;
			return $this;
		}
}
?>