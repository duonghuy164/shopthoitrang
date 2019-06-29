<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin;

class LoginController extends Controller
{
    public function index()
    {
    	return view('admin.login.index');
    }

    public function handleLogin(Request $request,admin $ad)
    {
    	// dd($request->all());
    	$username = $request->username;
    	$password = $request->pass;
    	$infoAd = $ad->GetAllDataAdmin($username,$password);
        // dd($infoAd);
    	if($infoAd){
    		$request->session()->put('user',$infoAd['username']);
            $request->session()->put('id',$infoAd['id']);
            $request->session()->put('email',$infoAd['email']);
            // dd($data);
    		return redirect()->route('admin.dashboard');
    	}
    	// $data['admin']=$infoAd->toArray();
    	// dd($infoAd);
    	// foreach($infoAd as $key => $item){
    	// 	if($item['username'] == $username){
    	// 		dd($infoAd);
    	// 	}
    	// }
    	
    	return redirect()->route('admin.login');
    }
    public function logout(Request $request)
    {
        $request->session()->forget('user');
        $request->session()->forget('id');
        $request->session()->forget('email');

        return redirect()->route('admin.login');
    }
}
