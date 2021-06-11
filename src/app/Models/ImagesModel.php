<?php namespace App\Models;

use CodeIgniter\Model;

class ImagesModel extends Model
{
    protected $table = 'is_image';
    protected $primaryKey = 'id';
    protected $returnType =  'array';
    protected $allowedFields = ['post_id','url'];

    public function getPreview($post_id)
    {
        $imageArray = $this->where('post_id', $post_id)->select('url')->selectMin('id')->find();
        try {
            unset($imageArray[0]['id']);
            $imageArray = $imageArray[0];
            return $imageArray;
        } catch (\Throwable $th) {
            return false;
        }  
    }

    public function getByPostId($post_id)
    {
        return $this->where('post_id', $post_id)
                    ->findAll();
    }
    public function deleteByPostId($post_id)
    {
        return $this->where('post_id', $post_id)
                    ->delete();
    }
}