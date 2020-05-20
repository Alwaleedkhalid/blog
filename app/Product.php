<?php

namespace App;

use App\Review;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{   
    protected $guarded = ['fn','ln'];
    protected $fillable = [
        'name','detial','stock','price','discount'
    ];
    public $timestamps = false;

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
        
}

