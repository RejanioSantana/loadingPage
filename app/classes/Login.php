<?php

namespace app\classes;

use app\classes\Hash;
use app\controllers\DataController;
use app\controllers\SectionControls;

class Login {

	/**
	 * @param $email
	 * @param $password
	 * @param Model       $model
	 */
	public static function logar($email, $password) {
		$dados = DataController::login($email);

		if (!$dados) {
			return false;
		}

		if (Hash::checkPassword($password, $dados["password"])) {
			SectionControls::start();
			$_SESSION['dados'] = $dados;
			session_regenerate_id(true);

			return true;
		}

		return false;

	}

	/**
	 * @param Model $model
	 */
	public static function logout($model) {
		session_destroy();

		// return redirect($model->redirect);

	}

}