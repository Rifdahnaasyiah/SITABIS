<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('phbs_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('data_masryarakats_id')->constrained();
            $table->foreignId('quesioners_id')->constrained();
            $table->string('value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phbs_answers');
    }
};
