<?php

namespace Database\Seeders;

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
            'Economy',
            'Premium Economy',
            'Business',
            'First Class',
        ];

        foreach ($categories as $name) {
            Category::firstOrCreate([
                'name' => $name,
            ]);
        }
    }
}
