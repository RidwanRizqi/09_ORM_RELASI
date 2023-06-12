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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('nim', 10)->primary();
            $table->string('nama', 50);
            $table->string('kelas', 40);
            $table->string('jurusan', 40);
            $table->string('no_handphone', 15);
            $table->string('email', 50)->unique();
            $table->string('tanggal_lahir', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
