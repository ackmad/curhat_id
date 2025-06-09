<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder; // Pastikan ini di-import jika AdminSeeder dipakai

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Memanggil AdminSeeder
        $this->call(AdminSeeder::class);
        $this->call(StoriesSeeder::class);
    }
}
