<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locataire extends Model
{
    //protected $fillable = ['first_name', 'last_name', 'email'];
    protected $guarded = [];

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
        return $this->belongsToMany(Property::class, 'property_id');
    }

    public function location()
    {
        return $this->hasMany(Location::class);
    }

    public function fullName(): string
    {
        return $this->first_name.' '.$this->last_name;
    }
}
