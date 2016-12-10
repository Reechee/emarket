<?php

namespace emarket\Models;

use Illuminate\Database\Eloquent\Model;

class ta_products extends Model
{
    protected $table ='ta_products';
    protected $primaryKey = 'prod_id';
    public $timestamps = false;


    protected $casts =[
    	'prod_cantidadT' => 'int',
    	'prod_precio' => 'int',
    	'prod_estado' => 'int',
    	'prod_catid' => 'int',
    ];

    protected $fillable = [
        'prod_cod',
    	'prod_nombre',
    	'prod_cantidadT',
    	'prod_precio',
    	'prod_estado',
    	'prod_catid'
    ];
}
