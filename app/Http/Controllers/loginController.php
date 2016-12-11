<?php

namespace emarket\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use emarket\Models\ta_login;
use emarket\Models\ta_users;

class loginController extends BaseController
{
    public function index(){
    	return  view('login');
    }

    public function store(Request $request){
    	//verificar usuario y contraseña pas
    	//return "login store";
    	$dbusers = ta_login::all();

    	foreach ($dbusers as $value) {
    		if (strcmp($value['log_usuario'], $request['user'])==0) {
    			if(strcmp($value['log_psw'], $request['pass'])==0){
                    $id_log = $value['log_id'];
                    $dbu = ta_users::all();

    				foreach ($dbu as $value2) {
                        if((int)$id_log==(int)$value2['usr_logid']){
                            $id = $value2['usr_tipo'];
                        }
                    }
    				return view('indexE',['id'=>$id]);
    			}
                echo '<script language="javascript">';
                echo 'alert("Password incorrecto")';
                echo '</script>';
                return view('login');
    		}
    	}
        echo '<script language="javascript">';
        echo 'alert("usuario invalido")';
        echo '</script>';
    	return view('login');

    	
    	
    }


}