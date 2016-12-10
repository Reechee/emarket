<?php

namespace emarket\Models;
use Illuminate\Database\Eloquent\Model;

class ta_requests extends Model
{
    protected $table ='ta_requests';
    protected $primaryKey = 'rq_id';
    public $timestamps = false;

    protected $casts =[
    	'rq_cantPedida' => 'int',
    	'rq_cantReal' => 'int',
    	'rq_encargado' => 'int',
    	'rq_gerente' => 'int',
    	'rq_estado' => 'int'
    ];

    protected $dates = [
		'rq_fecha'
	];

    protected $fillable = [
    	'rq_encargado',
    	'rq_prodnom',
    	'rq_cantPedida',
    	'rq_estado',
    	'rq_gerente',
    	'rq_fecha',
    	'rq_cantReal',
    	'rq_obs'
    ];
}
