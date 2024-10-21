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
        Schema::create('data_masryarakats', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->longText('alamat');
            $table->string('no_telp');
            $table->string('desa');
            $table->string('usia');
            $table->string('jml_keluarga');
            $table->string('kondisi_keluarga');
            $table->string('kondis_bayi');
            $table->string('usia_bayi');
            $table->string('tipe_persalinan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_masryarakats');
    }
};
