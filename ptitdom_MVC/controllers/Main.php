<?php
class Main extends Controller{
	
	public function index($user, $pwd){
		$this->loadModel('Apprenants', $user, $pwd);
		$aps = $this->Apprenants->getAll();

		$this->render('main', compact('aps'));
	}
	
	public function connection($user, $pwd){
		$connection_error = $this->loadModel('Utilisateurs', $user, $pwd);
		
		if (!$connection_error) {
			$_SESSION['username'] = $user;
			$_SESSION['password'] = $pwd;
			//$_SESSION['role'] = $this->Utilisateurs->getRoleByUsername($user);
			
			$this->loadModel('Apprenants', $user, $pwd);
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
