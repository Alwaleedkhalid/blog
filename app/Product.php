<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $guarded = ['fn','ln'];
    public $timestamps = false;


    public function user(){
            return $this->belongsTo('App\User');
        }
        
    }

