<?php

namespace emarket\Models;

use Illuminate\Database\Eloquent\Model;

class ta_login extends Model
{
    protected $table ='ta_login';
    protected $primaryKey = 'log_id';
    public $timestamps = false;


    protected $fillable = [
    	'log_usuario',
    	'log_psw'
    ];}
