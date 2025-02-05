<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'title' => 'Maintain',
                'is_public' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Develop',
                'is_public' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Consulting',
                'is_public' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
