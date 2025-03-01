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
        User::factory()->create([
            'name' => 'Stepbrother',
            'email' => 'stepbrother@gmail.com',
            'usertype' => 'user',
            'password' => bcrypt('stepbrother12345'),
        ]);

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'usertype' => 'admin',
            'password' => bcrypt('admin12345'),
        ]);

        $this->call([CategorySeeder::class, BookSeeder::class]);
    }
}
