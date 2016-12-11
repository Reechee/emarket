<?php

namespace emarket\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use emarket\Models\ta_products;
use emarket\Models\ta_requests;

class listaPendientesController extends BaseController
{
    public function index(){

        $dbPendientes = ta_requests::all();
        $listaid = array();
        $listanombre = array();
        $listacantidad= array();

        foreach ($dbPendientes as $value) {
            if((int)$value['rq_estado']==0){
                array_push($listaid, $value['rq_id']);
                array_push($listanombre, $value['rq_prodnom']);
                array_push($listacantidad, $value['rq_cantPedida']);
            }
        }


    	return  view('pendientes',['listaid'=>$listaid,'listanombre'=>$listanombre,'listacantidad'=>$listacantidad]);
    }

    public function create(){
    	return view('solicitudes.create');
    	
    }

    public function store(Request $request){
        $aux = ta_requests::find($request['numero']);
        $aux->rq_estado = 1;
        $aux->save(); 
        
    	echo '<script language="javascript">';
        echo 'alert("Pedido aceptado")';
        echo '</script>';

        return view('indexE',['id'=>0]);
    }


    


}