<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sums', function (Blueprint $table) {
            $table->id();
            $table->string('sum_ner');
            $table->unsignedBigInteger('aimag_id');
            $table->timestamps();

            $table->foreign('aimag_id')->references('id')->on('aimags');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sums');
    }
};
