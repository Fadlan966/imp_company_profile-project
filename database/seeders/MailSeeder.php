<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mails')->insert([
            [
                'name' => 'masbro abai',
                'email' => 'masbro@gmail.com',
                'company_name' => 'imepe studio',
                'project_details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum velit qui esse. Officia sed libero hic nesciunt quod. Culpa, totam?',
                'service_id' => 1,
                'project_theme_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
