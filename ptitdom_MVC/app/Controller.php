<?php
abstract class Controller{
	
	// this function creates the junction to the model which will manage data
	public function loadModel($model, $username, $pwd){
		require_once(ROOT.'models/'.$model.'.php');
		$this->$model = new $model($username, $pwd);
		return $this->$model->error;
	}
	
	// render function prepares data and sends them towards the appropriate view
	public function render($fichier, array $data = []){
		// transform data into variables
		extract($data);
		
		ob_start(); // ob works as a buffer of memory
		// displaying views from current page and default
		require_once(ROOT.'views/'.$fichier.'.php');
		$content = ob_get_clean(); // used in default view to call external content
		
		require_once(ROOT.'views/default.php');
	}
}
?>
