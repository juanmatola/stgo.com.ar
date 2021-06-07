<?php namespace App\Models;

use CodeIgniter\Model;

class PostsModel extends Model
{
    protected $table = 'is_post';
    protected $primaryKey = 'id';
    protected $returnType =  'array';
    protected $allowedFields = ['title','description','location','startdate','status','team'];

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

    public function getPostById($post_id)
    {
        return $this->find($post_id);
    }
}