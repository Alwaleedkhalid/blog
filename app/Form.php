<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $guarded = ['name','price'];
    // protected $fillable = ['created_at ','updated_at'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
