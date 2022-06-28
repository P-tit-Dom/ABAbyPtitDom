<?php
class Seance extends Controller
{

	public function index($user, $pwd, $i)
	{

		$this->loadModel('Cotations', $user, $pwd);
		$cot = $this->Cotations->getOne($i);
		$this->render('cotation', compact('cot'));
	}
}
?>
