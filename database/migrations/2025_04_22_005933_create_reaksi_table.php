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
        Schema::create('reaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('curhat_id')->constrained('curhat')->onDelete('cascade');
            $table->enum('tipe_reaksi', ['dukung', 'relate']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reaksi');
    }
};
