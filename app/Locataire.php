<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Locataire extends Model
{
    use Notifiable;

    protected $fillable = ['first_name', 'last_name', 'address', 'postalcode', 'city', 'country', 'email', 'birth_date',
    'place_of_birth', 'nationality', 'phone_number', 'idcard_number', ];

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
