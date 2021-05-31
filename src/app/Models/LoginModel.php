<?php namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    /* Le digo al modelo sobre que tabla hacer las consultas y otras configuraciones sobre el modelo */
    protected $table = 'is_user';
    protected $primaryKey = 'id';
    protected $returnType =  'array';
    protected $allowedFields = []; //declaro sobre que dato de tabla voy a poder modificar desde el modelo

    /* Metodo para traer todos los datos de usuario*/

    public function getUser($user){
        return $this->where('username', $user)->findAll();
    }
}