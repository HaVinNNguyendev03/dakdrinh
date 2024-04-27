<?php 
namespace App\Models;

use CodeIgniter\Model;

class Mbaiviet extends Model{
    protected $table = 'tbbaiviet';
    protected $primaryKey = 'idbaiviet';
    
    protected $useAutoIncrement = true;
    
    protected $allowedFields = ['iddanhmuc', 'iduser', 'tomtatbaiviet', 'anhrthumnail','tieudebaiviet','noidungbaiviet','ngaytao','ngaydang','tennguoidung','tinnoibat','idmenu','tieudeurl'];
    
    public function getbaiviet($id)
    {
        return $this->find($id);
    }
    public function findIdDanhMuc($idDanhMuc)
{
    return $this->where('iddanhmuc', $idDanhMuc)->first();
}
    public function addbaiviet($data)
    {
        return $this->insert($data);
    }
    
    public function updatebaiviet($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deletebaiviet($id)
    {
        return $this->delete($id);
    }
    public function getbaivietByMenu($idmenu)
{
    return $this->where('idmenu', $idmenu)->orderBy('idbaiviet', 'DESC')->findAll();
}
public function getBaivietByDanhMucPaginated($iddanhmuc, $page, $perPage)
    {
        return $this->where('iddanhmuc', $iddanhmuc)
                    ->orderBy('ngaytao', 'DESC')
                    ->paginate($perPage, 'trangbaiviet', $page);
    }
    public function getBaivietByDanhMucsPagianted($iddanhmuc, $page, $perPage)
    {
        return $this->whereIn('iddanhmuc', $iddanhmuc)
                    ->orderBy('idbaiviet', 'DESC')
                    ->paginate($perPage, 'trangbaiviet', $page);
    }
    public function getTinMoiNhat($sobaiviet){
        return $this->query('SELECT * FROM tbbaiviet WHERE tinnoibat = ? ORDER BY ngaytao DESC LIMIT ?', [1, $sobaiviet])->getResult();
    }
    public function getbaivietDanhMuc($iddanhmuc)
    {
        return $this->whereIn('iddanhmuc', $iddanhmuc)
        ->orderBy('ngaytao', 'DESC')
        ->limit(5)
        ->find();
    }
    public function getbaivietOneDanhMuc($iddanhmuc)
    {
        return $this->where('iddanhmuc', $iddanhmuc)
        ->orderBy('ngaytao', 'DESC')
        ->limit(5)
        ->find();
    }
    public function getbaivietMenu($idmenu)
    {
        return $this->where('idmenu', $idmenu)
        ->orderBy('ngaytao', 'DESC')
        ->limit(5)
        ->find();
    }
        public function getIdmenuByIddanhmuc($iddanhmuc)
        {
            return $this->select('idmenu')
                        ->where('iddanhmuc', $iddanhmuc)
                        ->orderBy('idmenu', 'DESC')
                        ->first();
    }
}
