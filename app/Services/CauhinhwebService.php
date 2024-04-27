<?php
namespace  App\Services;
use App\Models\Mcauhinhweb;

class CauhinhwebService{
   protected $mcauhinh;
   public function __construct()
   {
       $this->mcauhinh = new Mcauhinhweb();
   }
   public function getAllCauhinhweb()
   {
       return $this->mcauhinh->getAllcauhinhweb();
   }
}

