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
        Schema::create('saran_programmer', function (Blueprint $table) {
            $table->id();
            $table->string("nama", 255);
            $table->int("id_tujuan", 11);
            $table->foreign("id_tujuan")->references("id")->on("tujuan_saran")->onDelete("cascade");
            $table->text("pesan");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saran_programmer');
    }
};
