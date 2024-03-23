<?php

namespace App\Models;

use CodeIgniter\Model;

class MSlogan extends Model
{
    protected $table            = 'tbslogan';
    protected $primaryKey       = 'idslogan';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['noidungslogan'];
    public function getAllslogan()
    {
        return $this->findAll();
    }
    public function getslogan($id)
    {
        return $this->find($id);
    }
    public function addslogan($data)
    {
        return $this->insert($data);
    }
    
    public function updateslogan($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteslogan($id)
    {
        return $this->delete($id);
    }
}
