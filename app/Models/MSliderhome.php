<?php

namespace App\Models;

use CodeIgniter\Model;

class MSliderhome extends Model
{
    protected $table            = 'tbsliderhome';
    protected $primaryKey       = 'idsliderhome';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['chuthichanhsliderhome','anhsliderhome'];
    public function getAllSlider()
    {
        return $this->findAll();
    }
    public function getslider($id)
    {
        return $this->find($id);
    }
    public function addslider($data)
    {
        return $this->insert($data);
    }
    
    public function updateslider($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteslider($id)
    {
        return $this->delete($id);
    }
}
