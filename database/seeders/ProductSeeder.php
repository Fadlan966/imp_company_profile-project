<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Smart Chat Bot',
                'image' => 'images/product1.jpg',
                'caption' => 'Chatbot merupakan suatu program kecerdasan buatan (AI) yang dapat menyerupai percakapan manusia dalam bentuk pesan, serta merespon pertanyaan pelanggan dengan cepat dan natural.',
                'created_at' => now(),
                'updated_at' => now(),
                'project_theme_id' => 1,
            ],
            [
                'name' => 'Smart Pesantren',
                'image' => 'images/product2.jpg',
                'caption' => 'Integrated information system for administrative and academic management. Islamic boarding school administration, study and finance dashboard.',
                'created_at' => now(),
                'updated_at' => now(),
                'project_theme_id' => 1,
            ],
            [
                'name' => 'Computer Based Test (CBT)',
                'image' => 'images/product3.jpg',
                'caption' => 'Sistem CBT merupakan sistem penyelengharaan ujian berbasis online yang dapat diakses melalui perangkat komputer dan handphone berbasis android.',
                'created_at' => now(),
                'updated_at' => now(),
                'project_theme_id' => 1,
            ],
            [
                'name' => 'Learning Management System',
                'image' => 'images/product3.jpg',
                'caption' => 'LMS is an innovative platform that provides an integrated and easily accessible space for online learning. It can be used to explore a wide range of information, learning materials, and training with broad accessibility. By leveraging internet technology, LMS enables users to learn flexibly, anytime and anywhere, according to their needs..',
                'created_at' => now(),
                'updated_at' => now(),
                'project_theme_id' => 1,
            ],
        ]);
    }
}
