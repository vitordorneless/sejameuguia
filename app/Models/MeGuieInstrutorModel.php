<?php

namespace App\Models;

use CodeIgniter\Model;

class MeGuieInstrutorModel extends Model
{
    protected $table            = 'me_guie_instrutores';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['cpf', 'nome', 'email', 'telefone_1', 'telefone_2', 'cep', 'cidade', 'estado', 'valor_hora', 'instagram', 'facebook'];    

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';    
}
