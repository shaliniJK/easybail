<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['name', 'address', 'address2', 'city', 'postcode', 'country', 'nb_rooms', 'size', 'furnished', 'property_type_id'];

    protected $with = ['propertyType'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class);
    }

    /**
     * Returns the full address of this property.
     *
     * @return string
     */
    public function fullAddress(): string
    {
        return $this->address.', '.$this->postcode.' '.$this->city;
    }

    public function designation(): string
    {
        return $this->propertyType->type.' à '.$this->city;
    }
}
