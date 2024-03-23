<?php

namespace App\Models;

use CodeIgniter\Model;

class Mthuvienvideo extends Model
{
    protected $table            = 'tbthuvienvideo';
    protected $primaryKey       = 'idvideo';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['tenvideo','linkvideo'];

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
    public function getAllVideo()
    {
        return $this->findAll();
    }
    public function getVideo($id)
    {
        return $this->find($id);
    }
    public function addVideo($data)
    {
        return $this->insert($data);
    }
    
    public function updateVideo($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteVideo($id)
    {
        return $this->delete($id);
    }
}
