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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id');
            // $table->foreignId('modul_id');
            $table->string('judul');
            $table->string('slug');
            // $table->decimal('harga', 7, 3);
            $table->integer('harga');
            $table->text('excerpt');
            $table->text('deskripsi');
            $table->text('kuis');
            $table->integer('jml_pelanggan');
            $table->integer('waktu_pengerjaan');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
