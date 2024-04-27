<?php

namespace App\Models;

use CodeIgniter\Model;

class Mdanhmuc extends Model
{
    protected $table            = 'tbdanhmuc';
    protected $primaryKey       = 'iddanhmuc';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['tendanhmuc', 'ghichu', 'idmenu','urldanhmuc'];

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
    public function generateIdDanhmuc($idmenu)
{
    // Lấy id danh mục cuối cùng của menu
    $lastDanhmuc = $this->where('idmenu', $idmenu)
                        ->orderBy('iddanhmuc', 'DESC')
                        ->first();
    if ($lastDanhmuc) { 
        // Tách phần số tiếp theo của iddanhmuc cuối cùng 
        $indexstring = 0;
        $lastNumber = intval(substr($lastDanhmuc['iddanhmuc'], $indexstring)); //intval chuyển ký tự thành số nguyên,substr trích xuất xuất chuỗi
        
        // Tạo iddanhmuc mới bằng cách cộng 1 vào số tiếp theo của iddanhmuc cuối cùng
        $newNumber = $lastNumber + 1;
        $newIdDanhmuc = $newNumber;
    } else {
        // Nếu không có danh mục nào trong menu, bắt đầu từ 1
        $newNumber = 1;
        $newIdDanhmuc = $idmenu . '0' .  $newNumber;

    }
    return $newIdDanhmuc;
}

    public function getDanhmucByMenu($idmenu)
    {
        // Lấy danh mục theo idmenu
        return $this->where('idmenu', $idmenu)->findAll();
    }
    public function getAllDanhmuc()
    {
        return $this->select('iddanhmuc, tendanhmuc, ghichu, idmenu')->findAll();
    }
    public function getDanhmuc($id)
    {
        return $this->find($id);
    }   
    public function addDanhmuc($data)
    {
        // Chỉ định giá trị cụ thể cho trường id
        $id = $data['iddanhmuc'];
    
        // Tạo câu lệnh SQL INSERT INTO với giá trị cụ thể cho trường id
        $sql = "INSERT INTO tbdanhmuc (iddanhmuc, tendanhmuc, ghichu, idmenu,urldanhmuc) 
                VALUES (?, ?, ?, ?,?)";
        
        // Thực thi câu lệnh SQL với các giá trị dữ liệu
        $query = $this->db->query($sql, [$id, $data['tendanhmuc'], $data['ghichu'], $data['idmenu'],$data['urldanhmuc']]);
    
        // Trả về kết quả của câu lệnh SQL
        return $query;
    }
    public function getIdmenuByIddanhmuc($iddanhmuc)
        {
            return $this->select('idmenu')
                        ->where('iddanhmuc', $iddanhmuc)
                        ->orderBy('idmenu', 'DESC')
                        ->first();
    }
    
    public function updateDanhmuc($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteDanhmuc($id)
    {
        return $this->delete($id);
    }
}