<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('members')->insert([
            [
                'name' => 'John Doe',
                'image' => 'karismatik',
                'is_show' => true,
                'division_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Satoshi Nakamoto',
                'image' => 'karismatik',
                'is_show' => false,
                'division_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vitalik Sinaga',
                'image' => 'karismatik',
                'is_show' => true,
                'division_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
