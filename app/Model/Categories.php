<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Categories extends Model
{
    protected $table ='categories';
    
    public function ParentCategories()
    {
        return $this->belongsTo('App\Model\ParentCategories','id_parent','id');
    }   


    public function products()
    {
    	return $this->hasMany('App\Model\Product','categories_id','id');
    }

    public function GetAllDataCategories()
    {
    	$data = [];
    	$query = Categories::all();

    	if($query){
    		$data = $query->toArray();
    	}
    	return $data;
    }

    public function GetAllIdCategoriesByIdParent($id)
    {
        // $data = DB::table('categories')
        //         ->select('id')
        //         ->where('id_parent','=',$id)->get();
        $data = Categories::select('id')->where('id_parent',$id)->get()->toArray();
        return $data;
    }

    public function GetAllIdCategoriesById($id)
    {
        $data = Categories::find($id);
        return $data;
    }
   

}
