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
        Schema::create('vote', function (Blueprint $table) {
            $table->id('vid');
            $table->string('name');
            $table->integer('attendants');
            $table->time('duration');
            $table->boolean('type')->default(true);
            $table->integer('threshold')->default(-1);
            $table->integer('agree')->default(0);
            $table->integer('disagree')->default(0);
            $table->integer('discard')->default(0);
            $table->integer('absence')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vote');
    }
};
