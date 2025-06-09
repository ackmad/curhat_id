<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert(
        [
            'nama' => 'Ackmad Elfan Purnam',
            'username' => 'fanfann2215',
            'password' => Hash::make('elfanp_1123'), // Pastikan password terenkripsi
            'email' => 'ackmadelfanp.backup@gmail.com',
            'nohp' => '089666192392',
            'hobi' => 'Baca Curhatan Orang',
            'bagian' => 'Full Stack Dev',
            'alamat' => 'Perumahan Bima',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'nama' => 'Aldi Aziz Faidlurrahman',
            'username' => 'aldiazf',
            'password' => Hash::make('aldiazf'),
            'email' => 'aldiazis641@gmail.com',
            'nohp' => '081918087647',
            'hobi' => 'Main Basket, Ngoding, Nulis',
            'bagian' => 'Back-end',
            'alamat' => 'Dekat Jl. Puri Mulia No.11, Jatimerta, Kec. Gunungjati, Kabupaten Cirebon, Jawa Barat 45151',
            'created_at' => now(),
            'updated_at' => now(),
        ],

    );
    }
}
