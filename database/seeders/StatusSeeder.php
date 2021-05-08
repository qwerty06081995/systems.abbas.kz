<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $data[0] = [
            'id'=>1,
            'status_name'=>'В процессе'
        ];
        $data[1] = [
            'id'=>2,
            'status_name'=>'Выполнен'
        ];
        $data[2] = [
            'id'=>3,
            'status_name'=>'В пути'
        ];
        $data[3] = [
            'id'=>4,
            'status_name'=>'Курьер забрал'
        ];

        DB::table('statuses')->insert($data);
    }
}
