<?php

namespace Database\Seeders;

use App\Models\Establishment;
use Illuminate\Database\Seeder;

class EstablishmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $establishments = [
            [
                'name'=>'Krispy Kreme'
            ],
            [
                'name'=>'Cinépolis'
            ],
            [
                'name'=>'Cinemex'
            ],
        ];
        foreach ($establishments as $key => $value) {
            $establishment = Establishment::create($value);
        }
    }
}
