<?php

namespace emarket\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use emarket\Models\ta_products;
use emarket\Models\ta_requests;

class listaRecepcionesController extends BaseController
{
    public function index(){

        $dbPendientes = ta_requests::all();
        $listaid = array();
        $listanombre = array();
        $listacantidad= array();

        foreach ($dbPendientes as $value) {
            if((int)$value['rq_estado']==1){
                array_push($listaid, $value['rq_id']);
                array_push($listanombre, $value['rq_prodnom']);
                array_push($listacantidad, $value['rq_cantPedida']);
            }
        }


        return  view('recepciones',['listaid'=>$listaid,'listanombre'=>$listanombre,'listacantidad'=>$listacantidad]);
    }

    public function create(){
    	return view('solicitudes.create');
    	
    }

    public function store(Request $request){
        $aux = ta_requests::find($request['numero']);
        $aux->rq_estado = 2;
        $aux->rq_cantReal = $request['cantidad'];
        $aux->rq_obs = $request['comentario'];
        $aux->save(); 

        //actualizar cantidad en almacen
        $dbprod = ta_products::all();
        $prodid=0;

        foreach ($dbprod as $value) {
            if(strcmp($aux['rq_prodnom'], $value['prod_nombre'])==0){
                $prodid = $value['prod_id'];
            }   
        }

        $auxprod = ta_products::find($prodid);
        $valorini = (int)$auxprod['prod_cantidadT'];
        $mas = (int)$request['cantidad'];
        $nuevoval = (int)$valorini + (int)$mas;
        $auxprod->prod_cantidadT = (int)$nuevoval;
        $auxprod->save();


    	echo '<script language="javascript">';
        echo 'alert("Pedido recepcionado")';
        echo '</script>';

        return view('indexE',['id'=>1]);
    }


}