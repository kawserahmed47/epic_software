<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    public function type()
    {
        return $this->belongsTo('App\Type');
    }

}
