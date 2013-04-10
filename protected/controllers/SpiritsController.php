<?php

class SpiritsController extends Controller {

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionSpirits() {
		$this->render('spirits');
	}

}