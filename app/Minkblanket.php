<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Minkblanket extends Model
{
    //

    protected $fillable=['path','title'];

    public function photos(){


        return $this->morphMany('App\Photo','imageable');
    }

}
