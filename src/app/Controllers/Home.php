<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		
		$data = [
			'page' => 'index',
		];

		echo view('templates/header', $data);
		echo view('home');
		echo view('templates/footer', $data);
	}

	//--------------------------------------------------------------------

}
