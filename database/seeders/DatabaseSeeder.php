<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call(AdminUserSeeder::class);
        User::create([
            'name' => 'Admin',
            'email' => 'angel123@gmail.com',
            'password' => Hash::make('12345678'),
            'rol' => 'administrador',

            'name' => 'Luis',
            'email' => 'luis93@gmail.com',
            'password' => Hash::make('99212995'),
            'rol' => 'administrador',
        ]);
    }
}
