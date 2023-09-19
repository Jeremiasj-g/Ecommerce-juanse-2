<?php
namespace App\Models;
use CodeIgniter\Model;

class usuarios_model extends Model{
    protected $table = 'usuarios';
    protected $primarykey = 'id';
    protected $allowedFields = ['nombre','apellido','usuario',
                               'email', 'pass', 'pass_confirm', 'perfil_id', 'baja', 'created_at'];
}