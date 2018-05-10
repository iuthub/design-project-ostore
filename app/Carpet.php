<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carpet extends Model
{
    //

    protected $fillable=['title'];

    public function photos(){

        return $this->morphMany('App\Photo','imageable');
    }
}
