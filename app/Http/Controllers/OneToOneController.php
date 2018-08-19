<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class OneToOneController extends Controller
{
    public function storeOneToOne()
    {
    	$countryData = [
    		'name' => 'Venezuela'
    	];
    	$Country = Country::create($countryData);

    	$locationData = [
    		'latitude' => '430',
            'longitude' => '034',
    	];
    	$Location = $Country->location()->create($locationData);

    	return $Location;
    }

    public function oneToOne()
    {
    	$Country = Country::first();
    	//$Country = Country::find(1);
    	$Location = $Country->location;

    	$data = [
    		'Nombre Pais'=> $Country->name,
    		'Latitud'    => $Location->latitude,
    		'Longitud'   => $Location->longitude
    	];

    	return $data;
    }

    public function updateOneToOne()
    {
    	$locationData = [
    		'latitude' => '4301',
            'longitude' => '0341',
    	];

    	$Country = Country::first();
    	//$Country = Country::find(1);

    	$Location = $Country->location()->update($locationData);

    	return 'Record updated';
    }

    public function deleteOneToOne()
    {
    	$Country = Country::first();
    	//$Country = Country::find(1);
    	$Country->location()->delete();
    	//$Country->delete(1);

    	return 'Deleted Info';
    }

}
