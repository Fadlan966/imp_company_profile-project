<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('divisions')->insert([
            [
                'name' => 'Mobile Developer',
                'caption' => 'This is the first example.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'QA Engineer',
                'caption' => 'This is the first example.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'UI/UX Designer',
                'caption' => 'This is the second example.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Web Developer',
                'caption' => 'This is the third example.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Data Scientist',
                'caption' => 'This is the third example.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
