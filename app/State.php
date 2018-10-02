<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //
    protected $fillable = ['name','initials'];

    public function country()
    {
    	$this->belongsTo(Country::class);
    }
}
