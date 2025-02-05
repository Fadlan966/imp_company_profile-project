<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('works')->insert([
            [
                'image' => 'images/image1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'images/image2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'images/image3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
