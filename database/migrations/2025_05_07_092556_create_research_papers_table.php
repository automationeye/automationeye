<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('research_papers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('abstract');
            $table->string('authors');
            $table->date('published_date');
            $table->string('keywords')->nullable();
            $table->text('excerpt')->nullable();
            $table->text('references')->nullable();
            $table->text('author_bios')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->string('thumbnail_url')->nullable();
            $table->string('download_url');
            $table->string('qr_code_url')->nullable();
            $table->integer('downloads')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('research_papers');
    }
};
