<?php

namespace Database\Seeders;

use App\Models\Motor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class
        ]);

        \App\Models\Motor::factory(5)->create();
    }
}
