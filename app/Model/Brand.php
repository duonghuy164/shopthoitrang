<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table ='brand';

    public function products()
    {
    	return $this->hasMany('App\Product');
    }

    public function GetAllDataBrand()
    {
    	$data=[];
    	$query = Brand::all();
    	if($query){
    		$data=$query->toArray();
    	}
    	return $data;
    }
}
