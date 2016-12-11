<?php

namespace emarket\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use emarket\Models\ta_login;
use emarket\Models\ta_users;

class nuevousuarioController extends BaseController
{
    public function index(){
    	return  view('nuevousuario');
    }

    public function store(Request $request){

        $dbusuarios = ta_users::all();
        $dblogin = ta_login::all();

        $userid;

        foreach ($dblogin as $value) {
            if(strcmp($value['log_usuario'], $request['user'])==0){
                echo '<script language="javascript">';
                echo 'alert("El usuario ya existe")';
                echo '</script>';
                //usuario ya existe
                return view('nuevousuario');

            }


        }

    	
    }


}