<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $guarded = [];

    protected $with = ['property', 'locataire', 'bailType'];

    public function path()
    {
        return route('locations.show', $this);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id');
    }

    public function locataire()
    {
        return $this->belongsTo(Locataire::class, 'locataire_id');
    }

    public function bailType()
    {
        return $this->belongsTo(BailType::class, 'bail_type_id');
    }

    public function paiements()
    {
        return $this->hasMany(Paiement::class);
    }

    public function description()
    {
        return "Location de votre {$this->property->designation()}";
    }
}
