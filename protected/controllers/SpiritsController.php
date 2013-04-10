<?php

class SpiritsController extends Controller {

	public function actionSpirits() {
		
		$brewsFile = new DataFile('brews.json');
		$brews = $brewsFile->read();
		
		$this->render('spirits', array('brews'=>$brews));
	}

}