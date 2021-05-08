<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShipmentSpeedSeeder extends Seeder
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
            'name'=>'Экспресс'
        ];
        $data[1] = [
            'id'=>2,
            'name'=>'Стандарт'
        ];
        $data[2] = [
            'id'=>3,
            'name'=>'Авто'
        ];

        DB::table('shipment_speeds')->insert($data);
    }
}
