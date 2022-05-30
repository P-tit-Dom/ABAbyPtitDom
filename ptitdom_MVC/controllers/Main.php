<?php
class Main extends Controller{
    
    public function index($user, $pwd){
        $this->loadModel('Apprenants', $user, $pwd);
        $aps = $this->Apprenants->getAll();

        $this->render('main', compact('aps'));
    }
    
    public function connection($user, $pwd){
        $connection_error = $this->loadModel('Apprenants', $user, $pwd);
        
        if (!$connection_error) {
            $_SESSION['username'] = $user;
            $_SESSION['password'] = $pwd;
            
            $aps = $this->Apprenants->getAll();
            $this->render('main', compact('aps'));
        }
        else { $this->render('connection'); }
    }
    
    public function to_form(){
        $this->render('connection');
    }
}
?>