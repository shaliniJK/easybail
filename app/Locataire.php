<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locataire extends Model
{
    //protected $fillable = ['first_name', 'last_name', 'email'];
    protected $guarded = [];


    //public function user()
    //{
    //    return $this->hasOne(User::class);
    //}

    public function path()
    {
        return route('locataires.show', $this);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function property()
    {
        return $this->hasOne(Property::class, 'property_id');
    }
}
