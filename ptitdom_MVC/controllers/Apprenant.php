<?php
class Apprenant extends Controller{
	
	public function index($user, $pwd, $i){
		
		// using param as direction for FC, targets, PEI, follow-up ?
		
		$this->loadModel('Apprenants', $user, $pwd);
		$aps = $this->Apprenants->getAll();
		
		if (isset($i) && $i != "") {
			$ap = $this->Apprenants->getOne($i);
			
			$this->render('apprenant', compact('aps', 'ap'));
		}
		else { $this->render('apprenant', compact('aps')); }
	}
}
?>
