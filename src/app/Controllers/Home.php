<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo '> Home_Controller';
		return view('home');
	}

	//--------------------------------------------------------------------

}