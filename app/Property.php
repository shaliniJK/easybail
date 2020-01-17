<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['type', 'address', 'nb_rooms', 'size', 'furnished'];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
