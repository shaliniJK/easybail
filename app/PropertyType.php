<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    /**
     * Returns the properties that have this PropertyType.
     */
    public function property()
    {
        return $this->hasMany(Property::class);
    }

    public function attributes()
    {
        return $this->belongsToMany('App\Attribute', 'property_type_attributes');
    }
}
