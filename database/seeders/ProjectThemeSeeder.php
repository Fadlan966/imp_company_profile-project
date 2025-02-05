<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProjectThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('project_themes')->insert([
            [
                'name' => 'Portofolio',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Blog/Article',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'E-Commerce',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dashboard Administration',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Company Profile',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Other',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
