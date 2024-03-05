<?php 
namespace App\Models;

use CodeIgniter\Model;

class Mbaiviet extends Model{
    protected $table = 'tbbaiviet';
    protected $primaryKey = 'idbaiviet';
    
    protected $useAutoIncrement = true;
    
    protected $allowedFields = ['iddanhmuc', 'iduser', 'tomtatbaiviet', 'anhrthumnail','tieudebaiviet','noidungbaiviet','ngaytao','ngaydang','tennguoidung'];
    
    public function getbaiviet($id)
    {
        return $this->find($id);
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
    public function getbaivietByDanhMuc($iddanhmuc)
{
    return $this->where('iddanhmuc', $iddanhmuc)->orderBy('idbaiviet', 'DESC')->findAll();
}
public function getBaivietByDanhMucPaginated($iddanhmuc, $page, $perPage)
    {
        return $this->where('iddanhmuc', $iddanhmuc)
                    ->orderBy('idbaiviet', 'DESC')
                    ->paginate($perPage, 'trangbaiviet', $page);
    }
    public function getBaivietByDanhMucsPagianted($iddanhmuc, $page, $perPage)
    {
        return $this->whereIn('iddanhmuc', $iddanhmuc)
                    ->orderBy('idbaiviet', 'DESC')
                    ->paginate($perPage, 'trangbaiviet', $page);
    }
    public function getTinMoiNhat($sobaiviet){
        return $this->query('SELECT * FROM tbbaiviet ORDER BY ngaytao DESC LIMIT ?',[$sobaiviet])->getResult();
    }
    public function getbaivietDanhMuc($iddanhmuc)
    {
        return $this->whereIn('iddanhmuc', $iddanhmuc)
        ->orderBy('ngaytao', 'DESC')
        ->limit(5)
        ->find();
    }
}
