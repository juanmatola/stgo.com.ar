<?php namespace App\Models;

use CodeIgniter\Model;

class ImagesModel extends Model
{
    protected $table = 'is_image';
    protected $primaryKey = 'id';
    protected $returnType =  'array';
    protected $allowedFields = ['post_id','url'];

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