<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    //
    protected $fillable=['user_id'];

    public function basketable(){


        return $this->morphTo();
    }
}
