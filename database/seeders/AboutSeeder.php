<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            'about' => 'InterActive pertama kali didirikan pada Oktober 1999 oleh Alex Surya Rahardjo, S.T seorang professional bisnis yang telah lama berkecimpung dalam Bidang Teknologi Informasi bersama dengan Efi Muliati, S.S yang sangat familiar dalam dunia E-Commerce dan Marketing Communication Relationship dengan nama InterActive Computer.',
        ]);
    }
}
