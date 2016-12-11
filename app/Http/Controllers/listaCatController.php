<?php

namespace emarket\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use emarket\Models\ta_categories;
use emarket\Models\ta_products;
use emarket\Models\ta_requests;

class listaCatController extends BaseController
{
    public function index($nombre){

        $dbCat = ta_categories::all();
        $dbPro = ta_products::all();
        $categoria = 0;
        $listaProdCod = array();
        $listaProdNom = array();
        $listaProdCan = array();
        $listaProdPre = array();

        foreach ($dbCat as $value) {
            if (strcmp($value['cat_nombre'], $nombre)==0) {
                $categoria = $value['cat_id'];
            }
        }

        foreach ($dbPro as $value) {
            if ((int)$value['prod_catid']==(int)$categoria) {
                array_push($listaProdCod, $value['prod_cod']);
                array_push($listaProdNom, $value['prod_nombre']);
                array_push($listaProdCan, $value['prod_cantidadT']);
                array_push($listaProdPre, $value['prod_precio']);
            }
        }

        print_r($listaProdCod);
    	return  view('productos',['listaProdCod'=>$listaProdCod,'listaProdNom'=>$listaProdNom,'listaProdCan'=>$listaProdCan,'listaProdPre'=>$listaProdPre]);
    }

    public function create(){
    	return view('solicitudes.create');
    	
    }

    public function store(Request $request){
        
        $dbprod = ta_products::all();
        $nombre=array();

        foreach ($dbprod as $value) {
            if (strcmp($value['prod_cod'], $request['codigo'])==0) {
                $nombre = $value['prod_nombre'];
                //array_push($nombre,$value['prod_nombre']);
            }
        }
        ta_requests::create([
            'rq_prodnom' => $nombre,
            'rq_cantPedida' =>(int)$request['cantidad'],
            'rq_estado' =>0,

            'rq_encargado'=>0,
            'rq_gerente'=>0,
            'rq_fecha'=>7/7/7,
            'rq_cantReal'=>0,
            'rq_obs'=>"",

            ]);

    	echo '<script language="javascript">';
        echo 'alert("Pedido guardado por aprobar")';
        echo '</script>';

        return view('indexE',['id'=>1]);
    }


}