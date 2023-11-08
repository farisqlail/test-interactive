<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            [
                'title_product' => 'Table Management System',
                'description_product' => 'InterActive MyProfit dilengkapi fitur Table Management untuk memudahkan kasir dalam mengatur waiting list, reservasi, check in - check out meja, pindah meja, gabung meja, batal meja, split bill, status meja, print dapur serta penyajian cepat dan akurat.',
            ],
            [
                'title_product' => 'Aplikasi Absensi Via Mobile',
                'description_product' => 'InTrax adalah Mobile Attendance atau Aplikasi Absensi via mobile app yang Terintegrasi Mesin Absensi dan Software Payroll di semua cabang Perusahaan yang terdapat fitur Pengajuan Ijin bagi Karyawan dan untuk dapat memonitor karyawan yang sedang WFH',
            ]
        ]);
    }
}
