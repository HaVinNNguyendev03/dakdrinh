<?php 
namespace App\Models;

use CodeIgniter\Model;

class Muser extends Model{
    protected $table = 'tbuser';
    protected $primaryKey = 'iduser';
    
    protected $useAutoIncrement = true;
    
    protected $allowedFields = ['tennguoidung', 'tentaikhoan', 'matkhau', 'rule'];
    
    
}