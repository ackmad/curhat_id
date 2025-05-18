<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Stories;

class StoriesSeeder extends Seeder
{
    public function run()
    {
        Stories::create([
            'judul' => 'Contoh Cerita',
            'isi' => 'Ini adalah contoh cerita.',
            'kategori' => 'Cinta',
            'mood' => 'Senang'
        ]);
        // Tambahkan data lain jika perlu
    }
}
