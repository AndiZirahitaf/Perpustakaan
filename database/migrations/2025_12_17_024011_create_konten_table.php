<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('konten', function (Blueprint $table) {
            $table->id('id_konten');
            $table->unsignedBigInteger('id_admin');

            $table->string('judul', 255);
            $table->text('isi_konten');

            $table->dateTime('tanggal_publikasi');
            $table->string('tipe_konten', 20);
            $table->string('gambar')->nullable();

            $table->foreign('id_admin')
                  ->references('id_admin')
                  ->on('pustakawan')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('konten');
    }
};