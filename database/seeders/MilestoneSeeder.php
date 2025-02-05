<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MilestoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('milestones')->insert([
            [
                'caption' => 'Company founded',
                'year' => 2010,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'caption' => 'Launched first product',
                'year' => 2012,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'caption' => 'Expanded to international market',
                'year' => 2018,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
