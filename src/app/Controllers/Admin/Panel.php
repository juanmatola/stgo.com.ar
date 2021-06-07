<?php namespace App\Controllers\Admin;

use App\Models\PostsModel;

class Panel extends BaseAdminController
{

	private $uploadPostPath = './writable/uploads/portfolio/';
	private $allowedExtensions = array('jpg','jpeg','png');
	private	$maxSize = 3000000; // Bytes 
	private	$maxImages = 10; // Units


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

        //DATA RECEIVING
        $req = $this->request;
        $files = $this->request->getFiles();

        //ID VALIDATION
        if(!preg_match('/\D/', $req->getGet('id'))){
            if ($req->getGet('id') !== null && !empty($req->getGet('id'))) {
                $data['id'] = $req->getGet('id');
            }
        }else {
            echo 'Id invalido, reject';
            return redirect()->to(base_url()."/admin/panel?insert=id_err");
        }

        //ORGANIC DATA
        $data['title'] = $req->getPost('title');
        $data['description'] = $req->getPost('description');
        $data['location'] = $req->getPost('location');
        $data['startdate'] = $req->getPost('startdate');
        $data['status'] = $req->getPost('status');
        $data['team'] = $req->getPost('team');

        
        //ACTION SELECTOR
        
        if(isset($data['id'])){
            echo'>update<br>';
            //$this->updatePost($data);
        }else {
            echo'>insert<br>';
            $res = $this->newPost($data, $files);

            echo $res;
            //return redirect()->to(base_url()."/admin/panel?insert={$res}");
        }

        // ----------------------------------------------------------------------------------------------
    }

    public function newPost($data, $files){ //Return STRING ('success' || 'input_err' || 'file_err')
        echo '<br>>>NEW POST<br>';

        $error = 'none';

        //DATA VALIDATION
        foreach ($data as $input) {
            if (empty($input) || !\is_string($input)) {
                $error = 'input_err';
            }
        }

        if ($error === 'none') {
            $postsModel = new PostsModel();
            $postID = $postsModel->insert($data);

            echo "post id: {$postID}";

            $this->uploadImages($postID, $files);

            return 'success';

        }else {
            echo '<br>*-------*<br>';
            echo '> error';
            echo '<br>*-------*<br>';
            return $error;
        }

        
    }

    public function updatePost($data){
        echo '<br>>UPDATE POST<br>';
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

    public function uploadImages($postID, $files){
        echo '<br>>>>Upload Images<br>';


        if($files){

            $images = array_slice($files['images'],0,$this->maxImages);

            foreach($images as $key => $img){

                if ($img->isValid() && !$img->hasMoved() && $this->fileValidation($img)){
                    
                    $imgName = $this->saveImage($img);
                    $imgData = array(   
                                        'post_id' => $postID,
                                        'url' => $imgName,
                                    );

                    //llamada a modelo de imagenes y realizar insercion de $imgData
            
                }else{
                    return "file_err";
                    exit;
                }
            }

        }


    }
    
    //UTILITIES
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
