<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('suggestions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('nama')->nullable();  // Opsional, jika pengguna ingin mengisi nama
            $table->string('email')->nullable();  // Opsional, jika ada kontak
            $table->string('kategori');
            $table->text('pesan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suggestions');
    }
};
