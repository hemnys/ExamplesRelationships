<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\State;

class OneToManyController extends Controller
{
    public function storeOneToMany()
    {
    	$country = Country::first();

    	$states = [
    		0 => [
    			'name' => 'Caracas',
    			'initials' => 'CA'
    		],
    		1 => [
    			'name' => 'Tachira',
    		'initials' => 'TA'
    		]
    	];

    	$insertStates = $country->states()->createMany($states);

    	return $insertStates;
    }
    public function storeOneToManyTwo()
    {
        $country = Country::first();
        $State = $country->states->first();
        $cities = [
            0 => [
                'name' => 'San Bernardino', 
            ],
            1 => [
                'name' => 'Altamira',
            ]
        ];

        $insertCities = $State->cities()->createMany($cities);

        return $insertCities;
    }
    public function oneToMany()
    {
    	$country = Country::first();

    	$data = [
    		'Nombre del Pais' => $country->name,
    		'Estados' => $this->getStates($country->states)
    	]; 
    	return $data;
    }
    public function getStates($states)
    {
        foreach ($states as $key => $state) {
            $data[] = [
                'Estado' => $state->name."-".$state->initials
            ];
        }
        return $data;
    }
    public function oneToManyTwo()
    {
        $country = Country::first();

        $data = [
            'Nombre del Pais' => $country->name,
            'Ciudades' => $this->getCities($country->cities)
        ]; 
        return $data;
    }
    public function getCities($cities)
    {
        foreach ($cities as $key => $city) {
            $data[] = [
                'Ciudad' => $city->name,
            ];
        }
        return $data;
    }
    
    public function updateOneToMany()
    {
    	$country = Country::first();

        $states = $country->states()->where('id', 1)->update([
            'name' => 'CARACAS',
            'initials' => 'ca'
        ]);
        return 'Record updated';
    }
    public function deleteOneToMany()
    {
    	$country = Country::first();

        $states = $country->states()->where('id', 1)->delete();

        return 'Record Deleted';
    }

}
