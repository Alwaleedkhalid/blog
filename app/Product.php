<?php

namespace App;

use App\Review;
use App\User;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{   
    protected $guarded = ['fn','ln'];
    protected $fillable = [
        'name','price','detial','stock','discount','user_id'
    ];
    public $timestamps = false;

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
        
}

