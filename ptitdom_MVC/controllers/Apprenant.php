<?php
class Apprenant extends Controller{
    
    public function index(){

        /*$this->loadModel('Handicap');
        $hdcp = $this->Handicap->getAll();*/

        $this->render('apprenant'/*, compact('technologies', 'hdcp', 'need')*/);
    }
}
?>