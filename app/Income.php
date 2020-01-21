<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('\App\User');
    }

    public function organization(){
        return $this->belongsTo('\App\Organization');
    }
}
