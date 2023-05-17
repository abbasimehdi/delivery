<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (! User::query()->where('email', 'admin@admin.me')->first()) {
            $user = User::query()->create([
                'name' => 'admin',
                'email' => 'admin@admin.me',
                'password' => bcrypt('12345678'),
            ]);

            if (! Role::query()->where('name', 'admin')->first()) {
                $role = Role::query()->create([
                    'name' => 'admin',
                ]);
            }

            $user->assignRole($role->name);
        }
    }
}
