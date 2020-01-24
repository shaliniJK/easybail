<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['type', 'address', 'nb_rooms', 'size', 'furnished'];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    /**
     * Returns the full address of this property.
     *
     * @return string
     */
    public function fullAddress(): string
    {
        return $this->address;
    }
}
