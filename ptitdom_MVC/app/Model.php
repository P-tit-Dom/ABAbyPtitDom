<?php
abstract class Model{
    private $host = "localhost";
    private $db_name = "garrat";
    //private $username = ""; // root
    //private $password = "";
    
    public $error = FALSE;
    
    protected $_connexion;

    public function getConnection($user, $pwd){
        // making sure no connection is already active
        $this->_connexion = null;

        // Trying to join the database
        try {
            $this->_connexion = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $user, $pwd);
            $this->_connexion->exec("set names utf8");
        }
        // catching errors
        catch(PDOException $exception) {
            //echo "Erreur de connexion : " . $exception->getMessage();
            $this->error = TRUE;
        }
    }
    
    // elementary function to get every element of a table
    public function getAll(){
        $sql = "SELECT * FROM ".$this->table;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    
    // elementary function to get a single element selected by its id
    public function getOne($i){
        $sql = "SELECT * FROM ".$this->table." WHERE id=".$i;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch();
    }
}
?>