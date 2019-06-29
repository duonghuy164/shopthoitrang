<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Payment;
class BillController extends Controller
{
    public function index(Payment $pay)
    {
    	$data = [];

    	$info = $pay->GetAllData();
    	$arr = $info->toArray();
    	$data['link'] = $info;
    	$data['infoPay'] = $arr['data'];
    	// 	
    	foreach($data['infoPay'] as $key =>$item){
    		$data['infoPay'][$key]['infoPd'] = json_decode($item['infoPd'],true);
    	}
    	// dd($data['infoPay']);
    	return view('admin.bill.index',$data);
    }
}
