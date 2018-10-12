<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laboratoriums extends Model
{
    protected $table = 'laboratoriums' ;
    protected $fillable = ['pilih','no_registrasi','no_order','tgl_order','tgl_sampling','perujuk','parameter'];
 
    public $timestamps = true;
}
