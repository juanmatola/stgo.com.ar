<?php namespace App\Controllers;

class About extends BaseController
{
	public function index()
	{
		
		$data = [
			'page' => 'about',
		];

		echo view('templates/header', $data);
		echo view('about');
		echo view('templates/footer', $data);
	}

	//--------------------------------------------------------------------

}