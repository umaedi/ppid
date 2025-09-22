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
        Schema::create('nama_layanans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('layanan_id')->constrained()->onDelete('cascade');
            $table->string('nama');
            $table->enum('status', ['aktif', 'nonaktif'])->default('aktif'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nama_layanans');
    }
};
