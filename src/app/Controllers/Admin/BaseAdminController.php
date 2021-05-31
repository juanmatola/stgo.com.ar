<?php namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Models\LoginModel;

class BaseAdminController extends Controller
{
	protected function sessionStatus() {
		$sessionStatus = session_status();
		if ($sessionStatus === 2 && !empty($_SESSION['username']) && !empty($_SESSION['password'])) {
			return true;
		}else{
			return false;
		}
	}

	protected function userValidation($formData = []) {

		$loginModel = new LoginModel();
		$userData = $loginModel->getUser($formData['username']);

		if (empty($userData)) {
			return false;
		}

		$entriedUsername = $formData['username'];
		$entriedHashedPassword = hash('sha512', $formData['password']);

		if ($entriedUsername === $userData[0]['username'] && $entriedHashedPassword === $userData[0]['password']) {
			return true;
		}else{
			return false;
		}
	}

	protected function cleanStringInput($string)
	{
		$cleanString = \trim($string);
		$cleanString = \strip_tags($cleanString);
		
		return $cleanString;
	}
}
