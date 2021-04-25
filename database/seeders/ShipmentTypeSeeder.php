<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShipmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [];
        $data[0] = [
            'id'=>1,
            'name'=>'Документы'
        ];
        $data[1] = [
            'id'=>2,
            'name'=>'Посылка'
        ];

        DB::table('shipment_types')->insert($data);
    }
}
