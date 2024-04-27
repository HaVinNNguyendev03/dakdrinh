<?php

namespace App\Models;

use CodeIgniter\Model;

class Msliderlogo extends Model
{
    protected $table            = 'tbsliderlogo';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['tenlogo','anhlogo','chuthich'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
    public function getAllsliderlogo()
    {
        return $this->findAll();
    }
    public function getsliderlogo($id)
    {
        return $this->find($id);
    }   
    public function addsliderlogo($data)
    {
        return $this->insert($data);
    }
    
    public function updatesliderlogo($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deletesliderlogo($id)
    {
        return $this->delete($id);
    }
}
