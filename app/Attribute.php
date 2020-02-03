<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable = ['name', 'display_name', 'is_mandatory'];

    public function propertyType()
    {
        return $this->belongsToMany('App\PropertyType', 'property_type_attributes');
    }
}
