<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        \App\Models\Book::factory()->create([
            'name' => 'name',
            'auther_name' => 'auther_name',
            'category_id' => 1,
            'date_of_publication' => 2000-05-16,
            'description' => 'description',
            'price' => 0.0


        ]);
    }
}
