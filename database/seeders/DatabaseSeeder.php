<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::factory()->create([
            'name' => 'Emanuel',
            'email' => 'emanuelcortesochoa@gmail.com',
            'password' => '12345678',
        ]);

        User::factory()->create([
            'name' => 'Yuleidy',
            'email' => 'yula@yula.com',
            'password' => '12345678',
        ]);

        $this->call([
            PostFlayerSeeder::class,

        ]);

    }
}
