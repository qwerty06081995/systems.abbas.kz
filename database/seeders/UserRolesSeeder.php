<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRolesSeeder extends Seeder
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
        for ($i=1;$i<=5;$i++){
            $data[$i] = [
                'user_id'=>$i,
                'role_id'=>$i,
            ];
        }
        DB::table('user_roles')->insert($data);
    }
}
