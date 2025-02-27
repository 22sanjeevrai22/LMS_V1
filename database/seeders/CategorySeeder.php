<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Science Fiction', 'History', 'Biography', 'Fantasy', 'Mystery', 'Romance', 'Horror', 'Other'
        ];

        foreach ($categories as $category) {
            Category::factory()->create([
                'category' => $category,
            ]);
        }
    }
}
