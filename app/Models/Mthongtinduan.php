<?php

namespace App\Models;

use CodeIgniter\Model;

class Mthongtinduan extends Model
{
    protected $table            = 'tbthongtinduan';
    protected $primaryKey       = 'idthongtinduan';
    protected $useAutoIncrement = true; 
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['anhrthumnail','tieudethongtinduan','noidungthongtinduan'];
    public function getAllthongtinduan()
    {
        return $this->findAll();
    }
    public function getthongtinduan($id)
    {
        return $this->find($id);
    }
    public function addthongtinduan($data)
    {
        return $this->insert($data);
    }
    
    public function updatethongtinduan($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deletethongtinduan($id)
    {
        return $this->delete($id);
    }
    public function getBaivietByDanhMucPaginated( $page, $perPage)
    {
        return $this->orderBy('idthongtinduan', 'DESC')
                    ->paginate($perPage, 'trangbaiviet', $page);
    }
}
