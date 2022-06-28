<?php
class Cotations extends Model {
	
	public function __construct($user, $pwd) {
		$this->table = "FC";
		$this->getConnection($user, $pwd);
	}
}
?>
