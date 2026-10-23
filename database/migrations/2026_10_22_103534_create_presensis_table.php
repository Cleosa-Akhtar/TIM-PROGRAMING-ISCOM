<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('presensis', function (Blueprint $table) {
            $table->id();
            $table->string('npm');
            $table->string('nama');
            $table->string('program_studi');
            $table->string('kelas');
            $table->string('mata_kuliah');
            $table->date('tanggal');
            $table->time('waktu_hadir');
            $table->string('status')->default('Alpa');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('presensis');
    }
};