<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyTypeAttribute extends Model
{
    protected $fillable = [ 'property_type_id', 'attribute_id' ];
}
