<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BailType extends Model
{
    public function location()
    {
        return $this->hasMany(Location::class);
    }
}
