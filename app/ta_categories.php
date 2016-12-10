<?php

namespace emarket\Models;

use Illuminate\Database\Eloquent\Model;

class ta_categories extends Model
{
    protected $table ='ta_categories';
    protected $primaryKey = 'cat_id';
    public $timestamps = false;


    protected $casts =[
    	'cat_estado' => 'int'
    ];

    protected $fillable = [
    	'cat_nombre',
    	'cat_estado'
    ];
}
