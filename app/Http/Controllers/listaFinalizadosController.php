<?php

namespace emarket\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use emarket\Models\ta_products;
use emarket\Models\ta_requests;

class listaFinalizadosController extends BaseController
{
    public function index(){

        $dbPendientes = ta_requests::all();
        $listaid = array();
        $listanombre = array();
        $listacantidad= array();
        $listacantReal = array();

        foreach ($dbPendientes as $value) {
            if((int)$value['rq_estado']==2){
                array_push($listaid, $value['rq_id']);
                array_push($listanombre, $value['rq_prodnom']);
                array_push($listacantidad, $value['rq_cantPedida']);
                array_push($listacantReal, $value['rq_cantReal']);
            }
        }
        //print_r($listacantReal);


        return  view('finalizados',['listaid'=>$listaid,'listanombre'=>$listanombre,'listacantidad'=>$listacantidad,'listacantReal'=>$listacantReal]);
    }

}