<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                'id'=>$i,
                'name'=>'Nurzhan'.$i,
                'email'=>'nurzhanduisenbaev4'.$i.'0@gmail.com',
                'password'=>Hash::make(123456),
            ];
        }

        DB::table('users')->insert($data);
    }
}
