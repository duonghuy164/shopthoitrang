<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Color extends Model
{
    protected $table ='color';

    public function products()
    {
    	return $this->belongsToMany('App\Product');
    }

    public function GetAllDataColor()
    {
    	$data= [];

    	$query = Color::all();
    	if($query){
    		$data = $query->toArray();
    	}
    	return $data;
    }

    public function GetAllData()
    {
        $query = Color::select('*')
                        ->paginate(5);
        return $query;
    }

    public function InsertDataInColor($data)
    {
        
        if(DB::table('color')->insert($data)){
            return true;
        }
        return false;
    }

    public function DeleteDataById($id)
    {
        if(DB::table('color')->where('id',$id)->delete()){
            return true;
        }
        return false;
    }

    public function getAllDataColorById($arr)
    {
        $data= Color::select('*')
                    ->whereIn('id',$arr)
                    ->get();

        return $data;
    }

}
