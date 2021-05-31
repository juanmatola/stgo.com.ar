<?php namespace App\Controllers\Admin;

use App\Models\LoginModel;

class Login extends BaseAdminController
{
    public function index()
    {
        helper('form');
		session_start();
		echo view('admin/login');
    }

    public function login (){
		/* Recibo datos del formulario */
		$req = $this->request;
		$formData = array(
			'username'=>$req->getPostGet('username'),
			'password'=>$req->getPostGet('password')
		);
	
		if($this->userValidation($formData)){

			session_start();
			$_SESSION['username'] = $formData['username'];
			$_SESSION['password'] = $formData['password'];

			if ($this->sessionStatus()) {
				return redirect()->to(base_url().'/admin/panel/');
				exit;
			}else {
				return redirect()->to(base_url().'/admin/?session_err');
				exit;
			}
		}else {
			return redirect()->to(base_url().'/admin/?login=data_err');
		}
	}

	public function logout() {
		session_start();
		session_destroy();
		return redirect()->to(base_url());
	}
}