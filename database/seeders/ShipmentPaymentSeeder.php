<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShipmentPaymentSeeder extends Seeder
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
            'name'=>'Отправителем'
        ];
        $data[1] = [
            'id'=>2,
            'name'=>'Получателем'
        ];
        $data[2] = [
            'id'=>3,
            'name'=>'Третьей стороной'
        ];
        DB::table('shipment_payment')->insert($data);
    }
}
