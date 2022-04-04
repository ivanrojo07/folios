<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $places = [
            [
                'state'=>'CDMX',
                'city'=>'Miguel Hidalgo'
            ],
            [
                'state'=>'CDMX',
                'city'=>'Cuauhtémoc'
            ],
            [
                'state'=>'PUEBLA',
                'city'=>'Tehuacán'
            ]
        ];

        foreach ($places as $key => $value) {
            $place = Place::create($value);
        }
    }
}
