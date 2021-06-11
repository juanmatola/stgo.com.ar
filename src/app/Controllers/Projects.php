<?php namespace App\Controllers;

use App\Models\PostsModel;
use App\Models\ImagesModel;

class Projects extends BaseController
{
	public function index()
	{
		$postmodel = new PostsModel();
		$imagemodel = new ImagesModel();

		$previews = $postmodel->getPreviews();

		foreach ($previews as $key => $project ) {
			$img = $imagemodel->getPreview($project['id']);
            $previews[$key] = $previews[$key] + $img;
        }
		
		$data = [
			'page' => 'projects',
		];
		$projects_data = [
			'projects' => $previews, 
		];


		echo view('templates/header', $data);
		echo view('projects', $projects_data);
		echo view('templates/footer', $data);
	}

	//--------------------------------------------------------------------

	public function show($post_id){
		$postmodel = new PostsModel();
		$imagemodel = new ImagesModel();

		$text_data = $postmodel->getPostById($post_id);
		$images = $imagemodel->getByPostId($post_id);

		$meta = [
			'page' => 'simple-project',
			'post' => $text_data,
		];
		$data = [
			'post' => $text_data,
			'images' => $images,
		];
		echo view('templates/header', $meta);
		echo view('simple-project', $data);
		echo view('templates/footer', ['page' => 'simple-project']);
	}

}