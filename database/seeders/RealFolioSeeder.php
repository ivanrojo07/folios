<?php

namespace Database\Seeders;

use App\Models\RealFolio;
use Illuminate\Database\Seeder;

class RealFolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $real_folios = [
            [
                'folio' => 'XWJAU123REXC',
                'establishment_id' => 1,

            ],
            [
                'folio' => 'XWJAU123RFXC',
                'establishment_id' => 1,

            ],
            [
                'folio' => 'XWJAU123RGXC',
                'establishment_id' => 2,

            ],
            [
                'folio' => 'XWJAU123RHXC',
                'establishment_id' => 2,

            ],
            [
                'folio' => 'XWJAU123RIXC',
                'establishment_id' => 2,

            ],
            [
                'folio' => 'XWJAU123RZXC',
                'establishment_id' => 2,

            ],
            [
                'folio' => 'XWJAU123RJXC',
                'establishment_id' => 3,

            ],
            [
                'folio' => 'XWJAU123RKXC',
                'establishment_id' => 3,

            ],
        ];
        foreach ($real_folios as $key => $value) {
            $real_folio = RealFolio::create($value);
        }
    }
}
