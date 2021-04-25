<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShipmentPaymentTypeSeeder extends Seeder
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
            'name'=>'По счету'
        ];
        $data[1] = [
            'id'=>2,
            'name'=>'Наличными'
        ];
        $data[2] = [
            'id'=>3,
            'name'=>'Терминалом'
        ];
        DB::table('shipment_payment_types')->insert($data);
    }
}
