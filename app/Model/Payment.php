<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Payment extends Model
{
    
    protected $table = 'orders';

    public function InsertDataPayment($data)
    {
    	$data =$arr = DB::table('orders')->insert($data);
    	if($data){
    		return true;
    	}
    	return false;

    }
    public function GetAllData()
    {
    	$data = Payment::select('*')->paginate(5);
    	return $data;
    }
}
