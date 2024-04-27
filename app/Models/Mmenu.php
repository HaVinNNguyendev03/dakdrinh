<?php

namespace App\Models;

use CodeIgniter\Model;

class Mmenu extends Model
{
    protected $table            = 'tbmenu';
    protected $primaryKey       = 'idmenu';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['tenmenu','ghichu','urlmenu'];

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
    public function getAllMenu()
    {
        return $this->findAll();
    }
    public function getMenu($id)
    {
        return $this->find($id);
    }   
    public function addMenu($data)
    {
        return $this->insert($data);
    }
    
    public function updateMenu($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteMenu($id)
    {
        // Lấy ra các idmenu liên quan từ bảng tbdanhmuc
    $relatedIdsQuery = "SELECT idmenu FROM tbdanhmuc WHERE idmenu = ?";
    $relatedIds = $this->db->query($relatedIdsQuery, [$id])->getResultArray();

    // Xóa dữ liệu từ bảng tbdanhmuc có idmenu liên quan
    $deleteRelatedQuery = "DELETE FROM tbdanhmuc WHERE idmenu = ?";
    foreach ($relatedIds as $relatedId) {
        $this->db->query($deleteRelatedQuery, [$relatedId['idmenu']]);
    }

    // Xóa dữ liệu từ bảng tbmenu
    $deleteMenuQuery = "DELETE FROM tbmenu WHERE idmenu = ?";
    $this->db->query($deleteMenuQuery, [$id]);
    return true;
    }
    public function joinMenuVaDanhMuc()
{
    $query = $this->db->query("
        SELECT 
            tbmenu.idmenu,
            tbdanhmuc.iddanhmuc,
            tbmenu.tenmenu,
            tbmenu.urlmenu,
            tbmenu.ghichu AS menu_ghichu,
            tbdanhmuc.tendanhmuc,
            tbdanhmuc.urldanhmuc,
            tbdanhmuc.ghichu AS danhmuc_ghichu
        FROM 
            tbmenu
        JOIN 
            tbdanhmuc ON tbmenu.idmenu = tbdanhmuc.idmenu
    ");

    return $query->getResultArray();
}
}
