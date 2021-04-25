<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
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
        // 1-ая зона
        $data[0] = ['id'=>1,'city_name'=>'Нур-Султан','city_zone'=>1];
        $data[1] = ['id'=>2,'city_name'=>'Караганда','city_zone'=>1];
        $data[2] = ['id'=>3,'city_name'=>'Петропавловск','city_zone'=>1];
        $data[3] = ['id'=>4,'city_name'=>'Павлодар','city_zone'=>1];
        $data[4] = ['id'=>5,'city_name'=>'Костанай','city_zone'=>1];
        $data[5] = ['id'=>6,'city_name'=>'Кокшетау','city_zone'=>1];
        $data[6] = ['id'=>7,'city_name'=>'Усть-Каменегорск','city_zone'=>1];
        $data[7] = ['id'=>8,'city_name'=>'Семей','city_zone'=>1];
        $data[8] = ['id'=>9,'city_name'=>'Кызылорда','city_zone'=>1];
        $data[9] = ['id'=>10,'city_name'=>'Шымкент','city_zone'=>1];
        $data[10] = ['id'=>11,'city_name'=>'Тараз','city_zone'=>1];
        $data[11] = ['id'=>12,'city_name'=>'Атырау','city_zone'=>1];
        $data[12] = ['id'=>13,'city_name'=>'Актау','city_zone'=>1];
        $data[13] = ['id'=>14,'city_name'=>'Актобе','city_zone'=>1];
        $data[14] = ['id'=>15,'city_name'=>'Уральск','city_zone'=>1];
        $data[15] = ['id'=>16,'city_name'=>'Талдыкорган','city_zone'=>1];
        // 2-ая зона
        $data[16] = ['id'=>17,'city_name'=>'Аксай','city_zone'=>2];
        $data[17] = ['id'=>18,'city_name'=>'Балхаш','city_zone'=>2];
        $data[18] = ['id'=>19,'city_name'=>'Жанаозен','city_zone'=>2];
        $data[19] = ['id'=>20,'city_name'=>'Екибастуз','city_zone'=>2];
        $data[20] = ['id'=>21,'city_name'=>'Аксу','city_zone'=>2];
        $data[21] = ['id'=>22,'city_name'=>'Риддер','city_zone'=>2];
        $data[22] = ['id'=>23,'city_name'=>'Рудный','city_zone'=>2];
        $data[23] = ['id'=>24,'city_name'=>'Жезказган','city_zone'=>2];
        $data[24] = ['id'=>25,'city_name'=>'Сатбаев','city_zone'=>2];
        $data[25] = ['id'=>26,'city_name'=>'Темиртау','city_zone'=>2];
        $data[26] = ['id'=>27,'city_name'=>'Туркестан','city_zone'=>2];
        $data[27] = ['id'=>28,'city_name'=>'Талгар','city_zone'=>2];
        $data[28] = ['id'=>29,'city_name'=>'Каскелен','city_zone'=>2];
        // 3-я зона
        $data[29] = ['id'=>30,'city_name'=>'Другое','city_zone'=>99];

        $data[30] = ['id'=>31,'city_name'=>'Алматы','city_zone'=>100];

        DB::table('cities')->insert($data);
    }
}
