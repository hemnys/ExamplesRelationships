<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name'];

    public function location()
    {
    	return $this->hasOne(Location::class);
    }
}
