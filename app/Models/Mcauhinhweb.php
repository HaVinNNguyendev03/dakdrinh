<?php

namespace App\Models;

use CodeIgniter\Model;

class Mcauhinhweb extends Model
{
    protected $table            = 'tbcauhinhweb';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['anhlogo','sodienthoai','tenweb','anhicon','linkemail'];

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
    public function getAllcauhinhweb()
    {
        return $this->findAll();
    }
    public function getcauhinhweb($id)
    {
        return $this->find($id);
    }
    public function addcauhinhweb($data)
    {
        return $this->insert($data);
    }
    
    public function updatecauhinhweb($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deletecauhinhweb($id)
    {
        return $this->delete($id);
    }
}
