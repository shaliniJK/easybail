<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locataire extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email'];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
