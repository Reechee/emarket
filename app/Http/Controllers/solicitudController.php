<?php

namespace emarket\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use emarket\Models\ta_categories;


class solicitudController extends BaseController
{
    public function index(){
    	$dbCategorias = ta_categories::all();

    	$categorias = array();

    	foreach ($dbCategorias as $value) {
    		if((int)$value['cat_estado']==0){
    			array_push($categorias, $value['cat_nombre']);
    		}
    	}
    	//print_r($categorias);
    	return  view('categorias',['categorias'=>$categorias]);	
    }
}