<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('f_a_q_s')->insert([
            [
                'name' => 'What is this company about?',
                'answer' => 'We provide high-quality services in various fields.',
                'is_show' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'How can I contact support?',
                'answer' => 'You can contact us via email at support@example.com.',
                'is_show' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Where is the company located?',
                'answer' => 'Our headquarters is in Jakarta, Indonesia.',
                'is_show' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
