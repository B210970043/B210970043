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
        Schema::create('ankets', function (Blueprint $table) {
            $table->id();
            $table->string('user_first_name');
            $table->string('user_last_name');
            $table->integer('user_age')->nullable();
            $table->string('user_phone_number')->nullable();
            $table->string('user_address')->nullable();
            $table->unsignedBigInteger('aimag_id');
            $table->unsignedBigInteger('sum_id');

            $table->timestamps();
            $table->foreign('aimag_id')->references('id')->on('aimags');
            $table->foreign('sum_id')->references('id')->on('sums');

        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ankets');
    }
};
