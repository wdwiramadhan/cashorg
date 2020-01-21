<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->hasMany('\App\User');
    }

    public function income(){
        return $this->hasMany('\App\Income');
    }
}
