<?php namespace App\Models;

use CodeIgniter\Model;

class PostsModel extends Model
{
    protected $table = 'is_post';
    protected $primaryKey = 'id';
    protected $returnType =  'array';
    protected $allowedFields = ['title','category_id','description','image_0','image_1','image_2'];

    public function getPosts()
    {
        return $this->findAll();
    }

    public function getRandomPosts($cant)
    {   
        return  $this->orderBy($this->primaryKey, 'RANDOM')
                     ->limit($cant)
                     ->find();
    }

    public function getPostsByCategory($category_id)
    {
        return $this->where('category_id', $category_id)
                    ->orderBy('id', 'DESC')
                    ->findAll();
    }

    public function getPostById($post_id)
    {
        return $this->find($post_id);
    }
}