<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
        ]);

        \App\Models\Motor::factory(5)->create();
        \App\Models\Address::factory(5)->create();
        \App\Models\Consignment::factory(5)->create();
        \App\Models\City::factory(5)->create();
    }
}
