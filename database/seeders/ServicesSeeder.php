<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            [
                'image_service'         => 'file/service/indeo_logo.png',
                'title_service'         => 'InterActive Design Studio',
                'description_service'   => 'Kami membantu Membranding Produk Bisnis Anda melalui Digital Agency dengan semangat Creativity Without Borders.',
            ],
            [
                'image_service'         => 'file/service/inspire_logo.png',
                'title_product'         => 'Finish The Quiz',
                'description_service'   => 'Perusahaan Konsultan Manajemen yang dibangun sejak tahun 2015 di bawah naungan PT. Interaktif Inspirasi Dunia.',
            ],
            [
                'image_service'         => 'file/service/logo-interactive-academy.png',
                'title_product'         => 'InterActive Academy',
                'description_service'   => 'InterActive Academy adalah suatu Lembaga Pelatihan Kompetensi di bawah naungan InterActive Group',
            ]
        ]);
    }
}
