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
            ProjectThemeSeeder::class,
            ServiceSeeder::class,
            MilestoneSeeder::class,
            ProductSeeder::class,
            WorkSeeder::class,
            DivisionSeeder::class,
            MemberSeeder::class,
        ]);
    }
}
