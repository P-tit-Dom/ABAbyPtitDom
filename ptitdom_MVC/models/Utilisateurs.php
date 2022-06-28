<?php
class Utilisateurs extends Model {
	
	public function __construct($user, $pwd) {
		$this->table = "apprenants";
		/* $this->table = "utilisateurs"; */
		$this->getConnection($user, $pwd);
	}
	
	public function getRoleByUsername($u){
		/*
		$sql = "SELECT * FROM ".$this->table." WHERE username=".$u;
		$query = $this->_connexion->prepare($sql);
		$query->execute();
		return $query->fetch();*/
	}
}
?>
