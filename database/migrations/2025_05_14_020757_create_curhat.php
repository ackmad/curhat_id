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
        Schema::create('curhat', function (Blueprint $table) {
            $table->id();
            $table->string("judul", 255);
            $table->text("isi_curhat");
            $table->unsignedBigInteger("id_kategori");
            $table->foreign("id_kategori")->references("id")->on("kategori")->onDelete("cascade");
            $table->string("emoji", 255);
            $table->timestamps();
        });    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curhat');
    }
};
