<?php namespace App\Controllers\Admin;

use App\Models\PostsModel;

class Panel extends BaseAdminController
{

	private $uploadPostPath = './writable/uploads/portfolio/';
	private $allowedExtensions = array('jpg','jpeg','png');
	private	$maxSize = 3000000; // Bytes 

    public function index(){                      //INDEX
        \session_start();

		$postsModel = new PostsModel();
        $posts = $postsModel->orderBy('id', 'DESC')->paginate(5, 'group1');

        if ($this->sessionStatus()) 
        {
            $userData = [
                'username' => $_SESSION['username'],
            ];
            $data = [
                'posts' => $posts,
                'pager' => $postsModel->pager,
            ];
            
            echo view('admin/templates/header', $userData);
            echo view('admin/index', $data);
            echo view('admin/templates/footer');
        }
        else 
        {
            return redirect()->to(base_url().'/admin/?login=false');
			exit;
        }
    }

    public function savePost(){                   //REFACTORIZAR generacion de $postData
        
        \session_start();
        if (!$this->sessionStatus()) {
			return redirect()->to(base_url().'/admin/?login=false');
			exit;
		}

		$postsModel = new PostsModel();

        $req = $this->request;

        $id = $req->getGet('id');
        $description = $req->getPost('description');

		$postData = array(
			'title'=>$req->getPost('title'),
            'category_id'=>$req->getPost('category'),
		);
        $postData = (!empty($description)) ? $postData + array('description' => $description) : $postData;
        $postData = (isset($id)) ? array('id' => $id) + $postData : $postData;

        if($files = $this->request->getFiles()){

            $images = array_slice($files['images'],0,3);

            foreach($images as $key => $img){

                if ($img->isValid() && ! $img->hasMoved()){
                    
                    if ($this->fileValidation($img)){

                        $imgName = $this->saveImage($img);
                        (isset($id)) ? $this->deleteFile($postsModel->find($id)["image_{$key}"]) : NULL;
                        $postData = $postData + array("image_{$key}" => $imgName);

                    }else{
                        return redirect()->to(base_url().'/admin/panel?insert=file_err');
                        exit;
                    }
                }else if(!isset($id)) {
                    return redirect()->to(base_url().'/admin/panel?insert=file_err');
                    exit;
                }
            }

        }

        $postsModel->save($postData);
        return redirect()->to(base_url().'/admin/panel?insert=success');
    }

    public function deletePost(){

        \session_start();
        if (!$this->sessionStatus()) {
			return redirect()->to(base_url().'/admin/?login=false');
			exit;
		}

        $id = $this->request->getGet('id');

        if (isset($id) && $id != '') {
			$postsModel = new PostsModel();

            for ($index=0; $index < 3; $index++) {
                $imgName = $postsModel->find($id)["image_{$index}"];
                $this->deleteFile($imgName);
            }

			$postsModel->delete($id);
			return redirect()->to(base_url().'/admin/panel?delete=success');
		}
		
		return redirect()->to(base_url().'/admin/panel?delete=err');
    }
    
    
    private function fileValidation($file) {     //Return BOOLEAN
		if ($file->getSize() < $this->maxSize && in_array($file->getExtension(), $this->allowedExtensions)) {
			return true;
		}else {
			return false;
		}
	}

    private function saveImage($img){            //Return STRING
        $name = $img->getRandomName();
        $img->move($this->uploadPostPath, $name);
        return $name;
    }

    private function deleteFile($file){          //Return VOID
        $path = $this->uploadPostPath.$file;
        if (file_exists($path) && !is_dir($path)) {
            unlink($path);
        }
        return;
    }
}
