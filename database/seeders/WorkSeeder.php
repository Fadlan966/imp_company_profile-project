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
                'title' => 'Pengembangan aplikasi perangkat lunak dengan senjata rudal 5kg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'images/image2.jpg',
                'title' => 'Pengembangan aplikasi perangkat lunak dengan senjata pisang 5kg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'images/image3.jpg',
                'title' => 'Pengembangan aplikasi perangkat lunak dengan senjata terong 5kg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
