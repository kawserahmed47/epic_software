<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function assessment()
    {
        return $this->hasMany('App\Assessment');
    }
}
