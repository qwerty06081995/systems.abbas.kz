<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

        $this->call(UserRolesSeeder::class);

        $this->call(CitySeeder::class);
        $this->call(ShipmentTypeSeeder::class);
        $this->call(ShipmentSpeedSeeder::class);
        $this->call(ShipmentPaymentSeeder::class);
        $this->call(ShipmentPaymentTypeSeeder::class);
        $this->call(StatusSeeder::class);
    }
}
