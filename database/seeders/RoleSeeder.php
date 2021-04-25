<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
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
            'name'=>'Admin'
        ];
        $data[1] = [
            'id'=>2,
            'name'=>'Moderator'
        ];
        $data[2] = [
            'id'=>3,
            'name'=>'Operator'
        ];
        $data[3] = [
            'id'=>4,
            'name'=>'Courier'
        ];
        $data[4] = [
            'id'=>5,
            'name'=>'Store'
        ];

        DB::table('roles')->insert($data);

    }
}
