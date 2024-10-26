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
        Schema::create('kategoris', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 255);
            $table->string('slug', 255)->unique();
            $table->timestamps();
        });

        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 255);
            $table->string('slug', 255)->unique();
            $table->text('isi');
            $table->dateTime('tanggal_publikasi');
            $table->unsignedBigInteger('kategori_id');
            $table->foreign('kategori_id')->references('id')->on('kategoris')->onDelete('cascade');
            $table->string('gambar', 255)->nullable();
            $table->string('penulis', 255);
            $table->enum('status', ['draf', 'terbit'])->default('draf');
            $table->string('meta_title', 255)->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords', 255)->nullable();
            $table->integer('views')->default(0);
            $table->timestamps();
        });

        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 255);
            $table->string('slug', 255)->unique();
            $table->text('deskripsi');
            $table->decimal('harga', 10, 2);
            $table->integer('stok');
            $table->string('gambar', 255)->nullable();
            $table->unsignedBigInteger('kategori_id');
            $table->foreign('kategori_id')->references('id')->on('kategoris')->onDelete('cascade');
            $table->string('meta_title', 255)->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords', 255)->nullable();
            $table->integer('views')->default(0);
            $table->timestamps();
        });

        Schema::create('komentars', function (Blueprint $table) {
            $table->id();
            $table->text('konten');
            $table->string('nama', 255);
            $table->string('email', 255)->nullable();
            $table->dateTime('tanggal_publikasi');
            $table->unsignedBigInteger('berita_id');
            $table->foreign('berita_id')->references('id')->on('beritas')->onDelete('cascade');
            $table->enum('status', ['draf', 'terbit'])->default('draf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komentars');
        Schema::dropIfExists('produks');
        Schema::dropIfExists('beritas');
        Schema::dropIfExists('kategoris');
    }
};
