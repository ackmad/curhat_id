<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseCurhatin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // tbl_kategori (INSERT DULUAN)
        DB::table('kategori')->insert([
            ['nama_kategori' => 'Cinta'],
            ['nama_kategori' => 'Keluarga'],
            ['nama_kategori' => 'Sekolah/Kuliah'],
            ['nama_kategori' => 'Persahabatan'],
            ['nama_kategori' => 'Masalah Diri'],
            ['nama_kategori' => 'Kesehatan Mental'],
            ['nama_kategori' => 'Karier'],
            ['nama_kategori' => 'Keuangan'],
            ['nama_kategori' => 'Sosial'],
            ['nama_kategori' => 'Spiritual'],
            ['nama_kategori' => 'Self-Love'],
            ['nama_kategori' => 'Random'],
        ]);
    
        // tbl_curhat (SETELAH kategori diisi)
        DB::table('curhat')->insert([
            [
                'judul' => 'Galau Tengah Malam',
                'isi_curhat' => 'Kenapa ya, tiap malam selalu keinget dia...',
                'id_kategori' => 1,
                'emoji' => '😢',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Senang Dapat Nilai Bagus',
                'isi_curhat' => 'Usaha keras akhirnya terbayar. Dapat nilai A!',
                'id_kategori' => 2,
                'emoji' => '😄',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Kangen Rumah',
                'isi_curhat' => 'Sudah 3 bulan di perantauan. Kangen masakan ibu.',
                'id_kategori' => 3,
                'emoji' => '🏠',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Dikhianati Teman',
                'isi_curhat' => 'Nggak nyangka sahabat sendiri nusuk dari belakang.',
                'id_kategori' => 1,
                'emoji' => '💔',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Bahagia Sederhana',
                'isi_curhat' => 'Lihat hujan sambil ngopi itu udah cukup buat bahagia.',
                'id_kategori' => 2,
                'emoji' => '☕',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
                
    }
}
