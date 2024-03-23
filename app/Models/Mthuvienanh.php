<?php

namespace App\Models;

use CodeIgniter\Model;

class Mthuvienanh extends Model
{
    protected $table            = 'tbthuvienanh';
    protected $primaryKey       = 'idthuvienanh';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['danhmucnamanh','ngaydanganh','hinhanh','chuthichanh'];

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
    public function getAllHinhAnh()
    {
        return $this->findAll();
    }
    public function getHinhAnh($id)
    {
        return $this->find($id);
    }
    public function addHinhAnh($data)
    {
        return $this->insert($data);
    }
    
    public function updateHinhAnh($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteHinhAnh($id)
    {
        return $this->delete($id);
    }
        public function apigetthuvienanh(){
            $query = $this->db->query("
            SELECT *
            FROM tbthuvienanh
            WHERE danhmucnamanh IN (
                SELECT danhmucnamanh    
                FROM tbthuvienanh
                GROUP BY danhmucnamanh
            )
            ORDER BY danhmucnamanh ASC
        ");
        return $query->getResultArray();
        }
    public function groupByDanhMucNam()
    {
        $query = $this->db->query("
        SELECT *
        FROM tbthuvienanh
        WHERE danhmucnamanh IN (
            SELECT danhmucnamanh
            FROM tbthuvienanh
            GROUP BY danhmucnamanh
        )
        ORDER BY danhmucnamanh ASC
    ");

    // Tạo mảng để chứa dữ liệu đã nhóm
    $groupedData = [];

    // Nhóm dữ liệu theo danh mục năm
    foreach ($query->getResultArray() as $row) {
        $groupedData[$row['danhmucnamanh']][] = $row;
    }

    return $groupedData;
    }
}
