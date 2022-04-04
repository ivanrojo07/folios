<?php

namespace Database\Seeders;

use App\Models\Establishment;
use App\Models\Place;
use Illuminate\Database\Seeder;

class EstablishmentPlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $places = Place::get();
        $establishments = Establishment::pluck('id');
        foreach ($places as $key => $value) {
            if($key+1 == $places->count()){
                $value->establishments()->attach($establishments[2]);
            }
            else{
                $value->establishments()->attach($establishments);
            }
        }
    }
}
