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
        Schema::create('ikms', function (Blueprint $table) {
            $table->id();
            $table->string('subdomain');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->text('alamat');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('jenis_layanan');
            $table->string('no_hp');
            $table->text('saran');
            $table->string('pertanyaan_1');
            $table->string('pertanyaan_2');
            $table->string('pertanyaan_3');
            $table->string('pertanyaan_4');
            $table->string('pertanyaan_5');
            $table->string('pertanyaan_6');
            $table->string('pertanyaan_7');
            $table->string('pertanyaan_8');
            $table->string('pertanyaan_9');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ikms');
    }
};
