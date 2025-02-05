<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            FAQSeeder::class,
            MilestoneSeeder::class,
            ProductSeeder::class,
            ProjectThemeSeeder::class,
            ServiceSeeder::class,
            WorkSeeder::class,
            DivisionSeeder::class,
            MemberSeeder::class,
        ]);
    }
}
