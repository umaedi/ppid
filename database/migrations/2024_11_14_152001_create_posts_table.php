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
        Schema::create('posts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->foreignId('category_id');
            $table->string('subdomain');
            $table->string('judul');
            $table->string('slug')->unique();
            $table->text('body');
            $table->string('thumbnail')->default('thumbnail.jpg');
            $table->string('caption_thumbnail')->nullable();
            $table->enum('status', ['draft', 'publish'])->default('draft');
            $table->integer('views')->default(0);
            $table->timestamp('tanggal_publish')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
