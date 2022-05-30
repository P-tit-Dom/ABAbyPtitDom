<?php
class Apprenants extends Model {
    
    public function __construct($id, $pwd) {
        $this->table = "apprenants";
        $this->getConnection($id, $pwd);
    }
}
?>