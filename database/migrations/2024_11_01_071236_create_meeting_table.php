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
        Schema::create('meeting', function (Blueprint $table) {
            $table->id('mid')->primary();
            $table->string('name',50);
            $table->string('holder',10);
            $table->date('date');
            $table->time('time');
            $table->string('place');
            $table->integer('group');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meeting');
    }
};
