<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    protected $guarded = [];

    public function path()
    {
        return route('paiements.show', $this);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function location()
    {
        return $this->hasOne(Property::class, 'location_id');
    }
}
