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
        $logid;

        foreach ($dblogin as $value) {
            if(strcmp($value['log_usuario'], $request['user'])==0){
                echo '<script language="javascript">';
                echo 'alert("El usuario ya existe")';
                echo '</script>';
                //usuario ya existe
                return view('nuevousuario');

            }
        }
        
        if ((int)$request['type']==1 || (int)$request['type']==0) {
            if(strcmp($request['pass'], $request['passve'])==0){
                //agrega en la tabla login
                ta_login::create([
                    'log_usuario'=>$request['user'],
                    'log_psw'=>$request['pass'],
                    ]);

                //agrega en la tabla usuarios
                $dblogin = ta_login::all();
                foreach ($dblogin as $value2) {
                    if(strcmp($value2['log_usuario'], $request['user'])==0){
                        $logid=$value2['log_id'];
                        ta_users::create([
                            'usr_logid'=>(int)$logid,
                            'usr_nombre'=>$request['user'],
                            'usr_correo'=>$request['mail'],
                            'usr_tipo'=>(int)$request['type'],
                            'usr_estado'=>0,
                            ]);

                        //se creo el usuario
                        echo '<script language="javascript">';
                        echo 'alert("Usuario registrado")';
                        echo '</script>';
                        return view('login');
                    }
                    
                }

            }
            //password no coincide
            echo '<script language="javascript">';
            echo 'alert("el password no coincide")';
            echo '</script>';
            return view('nuevousuario'); 

        }
        //no existe el tipo
        echo '<script language="javascript">';
        echo 'alert("elija un tipo valido")';
        echo '</script>';
        return view('nuevousuario'); 


        

    	
    }


}