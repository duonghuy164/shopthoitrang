<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Model\ParentCategories;
use App\Model\Payment;
class PaymentController extends Controller
{
	function __construct(ParentCategories $parent)
    {
        $nameParent = $parent->NameParent();
        view()->share('nameParent',$nameParent);
    }
    public function index()
    {
    	$data = [];

    	$data['cart'] = Cart::content();
    	return view('front-end.payment.index',$data);
    }

    public function PayOrder(Request $req,Payment $pay)
    {
        $fullname = $req->username;
        $email = $req->email;
        $phone = $req->phone;
        $address = $req->address;
        $note = $req->note;

        $infoPd = Cart::content();
        // dd($infoPd);
        $dataInsert = [
            'fullname' => $fullname,
            'email' => $email,
            'phone' =>$phone,   
            'address' => $address,
            'note' => $note,
            'infoPd' => json_encode($infoPd,true),
            'status' => 0,
            'created_at'=>date('Y:m:d H:i:s'),
            'updated_at'=>null
        ];
        if($infoPd){
            $up = $pay->InsertDataPayment($dataInsert);
            if($up){
                Cart::destroy();
                return redirect()->route('payment',['state' => 'success']);
            }else{
                return redirect()->route('payment',['state' => 'error']);
            }
        }else{
            return redirect()->route('payment',['state' => 'fail']);
        }
        
    }
}
