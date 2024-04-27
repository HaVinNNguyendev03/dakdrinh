<?php

namespace App\Models;

use Aws\AppSync\Exception\AppSyncException;
use CodeIgniter\Model;

class Mtruycap extends Model
{
    protected $table            = 'tbtruycap';
    protected $primaryKey       = 'idtruycap';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['truycapngay','truycaptuan','tongtruycap','ngay'];

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

    public function increaseCurrentAccess()
    {
        $day = date('Y-m-d');
        
        // Lấy số lượt truy cập hiện tại
        $currentAccess = $this->getTruycapngayByNgay($day);
        
        // Chuyển đổi kết quả thành số nguyên (nếu có)
        $currentAccessInt = isset($currentAccess->truycapngay) ? (int) $currentAccess->truycapngay + 1 : 1;
        if (!session()->has('current_access')) {
            session()->set('current_access', $currentAccessInt);
            session()->set('previous_date', $day); // Thiết lập ngày hiện tại
        } else {
            session()->set('current_access', $currentAccessInt);    
        }
    }   

    public function calculatePreviousDayAccess()
    {
        // Kiểm tra nếu ngày hiện tại khác với ngày lưu trữ trong session
        $currentDate = date('Y-m-d');
       // Kiểm tra xem đã có cột ngày có giá trị như biến tham số chưa
    $existingRecord = $this->where('ngay', $currentDate)->countAllResults();

    // Nếu không có, thêm một bản ghi mới với ngày là biến tham số
    if ($existingRecord == 0) {
        $this->insert([
            'ngay' => $currentDate
        ]);
    }
        $storedDate = session()->get('previous_date');

        if ($currentDate == $storedDate) {
            // Lưu trữ số lượt truy cập ngày trước vào cơ sở dữ liệu
            $Access = session()->get('current_access');
            $this->updateTruycapngayByNgay($currentDate, $Access);  
        }
    }
    public function getCurrentAccess()
    {
        // Lấy số lượt truy cập hiện tại từ session
        return session()->get('current_access');
    }
    
    public function getCurrentDay()
    {
        // Lấy số lượt truy cập hiện tại từ session
        return session()->get('previous_date');
    }
    public function getTruycapngayByNgay($ngay)
    {
        // Thực hiện truy vấn và trả về kết quả
        return $this->select('truycapngay')
                    ->where('ngay', $ngay)
                    ->get()
                    ->getRow();
    }
    public function updateTruycapngayByNgay($ngay, $newValue)
{
    // Tìm id của bản ghi có ngày như đã tham chiếu
    $query = $this->select('idtruycap')
                  ->where('ngay', $ngay)
                  ->get();
    
    // Lấy id nếu có
    $result = $query->getRow();
    if ($result) {
        $id = $result->idtruycap;

        // Thực hiện câu lệnh UPDATE trên cột truycapngay
        $this->where('idtruycap', $id)
             ->set('truycapngay', $newValue)
             ->update();
    }
}    public function insertTruycap($truycapngay, $ngay)
    {
        // Tạo dữ liệu để chèn
        $data = [
            'truycapngay' => $truycapngay,
            'ngay' => $ngay
        ];

        // Thực hiện chèn dữ liệu
        $this->insert($data);
    }
    public function calculateWeeklyAccess()
{
    // Lấy ngày hiện tại
    $currentDate = date('Y-m-d');

    // Tính ngày bắt đầu của tuần (tính từ ngày thứ Hai của tuần này)
    $startOfWeek = date('Y-m-d', strtotime('monday this week', strtotime($currentDate)));

    // Tính ngày kết thúc của tuần (tính từ ngày thứ Hai của tuần kế tiếp)
    $endOfWeek = date('Y-m-d', strtotime('sunday this week', strtotime($currentDate)));

    // Lấy tổng số lượt truy cập trong tuần từ cơ sở dữ liệu
    $weeklyAccess = $this->getWeeklyAccess($startOfWeek, $endOfWeek);

    // Cập nhật hoặc chèn dữ liệu vào cơ sở dữ liệu
    $this->updateOrInsertWeeklyAccess($startOfWeek, $weeklyAccess);
}

public function getWeeklyAccess($startOfWeek, $endOfWeek)
{
    // Thực hiện truy vấn và tính tổng số lượt truy cập trong tuần
    return $this->selectSum('truycapngay', 'weekly_access')
                ->where('ngay >=', $startOfWeek)
                ->where('ngay <=', $endOfWeek)
                ->get()
                ->getRow();
}
public function updateOrInsertWeeklyAccess($anyDayOfWeek, $weeklyAccess)
{
    // Lấy ngày của tuần chứa ngày bất kỳ trong tuần
    $startOfWeek = date('Y-m-d', strtotime('monday this week', strtotime($anyDayOfWeek)));

    // Kiểm tra xem đã có bản ghi cho tuần này chưa
    $existingRecord = $this->where('ngay', $startOfWeek)->countAllResults();

    // Nếu không có, thêm một bản ghi mới cho tuần này
    if ($existingRecord == 0) {
        $this->insert([
            'truycaptuan' => $weeklyAccess->weekly_access,
            'ngay' => $startOfWeek
        ]);
    } else {
        // Nếu có, cập nhật số lượt truy cập của tuần này
        $this->where('ngay', $startOfWeek)
             ->set('truycaptuan', $weeklyAccess->weekly_access)
             ->update();
    }
}
public function getTruycaptuan()
{
    // Lấy ngày hiện tại
    $currentDate = date('Y-m-d');
    // Tính ngày bắt đầu của tuần (tính từ ngày thứ Hai của tuần này)
    $startOfWeek = date('Y-m-d', strtotime('monday this week', strtotime($currentDate)));
    $result =  $this->select('truycaptuan')
                ->where('ngay', $startOfWeek)
                ->get()
                ->getRow();
    return $result->truycaptuan;
}
public function tinhtongtruycap()
{
    // Thực hiện truy vấn và tính tổng truy cập của cột truycapngay
    $query = $this->selectSum('truycapngay', 'tongtruycap')->get();
    $result = $query->getRow();

    // Trả về kết quả tổng truy cập
    return $result->tongtruycap;
}
}
