<?php

namespace emarket\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use emarket\Models\ta_login;
use emarket\Models\ta_users;

class olvidoController extends BaseController
{
    public function index(){
    	return  view('olvido');
    }

    public function store(Request $request){

        $dbusuarios = ta_users::all();
        $dblogin = ta_login::all();

        $userid;

        foreach ($dblogin as $value) {
            if(strcmp($value['log_usuario'], $request['user'])==0){
                $userid= $value['log_id'];
                //consegui el id del usuario

                foreach ($dbusuarios as $value2) {
                    if (strcmp($value2['usr_correo'],$request['mail'])==0) {
                        if (strcmp($request['pass'], $request['passve'])==0) {
                            $aux = ta_login::find($userid);
                            $aux->log_psw = $request['pass'];
                            $aux->save();
                            echo '<script language="javascript">';
                            echo 'alert("password actualizado")';
                            echo '</script>';
                            return view('login');
                        }
                        //retornar el password no coincide
                        echo '<script language="javascript">';
                        echo 'alert("el nuevo password no coincide")';
                        echo '</script>';
                        return view('olvido');
                    }
                }
                //retornar correo invalido
                echo '<script language="javascript">';
                echo 'alert("correo invalido")';
                echo '</script>';
                return view('olvido');

            }
        }
        //retornar usuario invalido
        echo '<script language="javascript">';
        echo 'alert("usuario invalido")';
        echo '</script>';
        return view('olvido');
    	
    }


}