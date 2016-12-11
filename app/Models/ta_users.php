<?php
namespace emarket\Models;

use Illuminate\Database\Eloquent\Model;

class ta_users extends Model
{
    protected $table ='ta_users';
    protected $primaryKey = 'usr_id';
    public $timestamps = false;


    protected $casts =[
    	'usr_tipo' => 'int',
    	'usr_logid' => 'int'
    ];

    protected $fillable = [
    	'usr_logid',
    	'usr_nombre',
        'usr_correo',
    	'usr_tipo',
    	'usr_estado'
    ];
}
