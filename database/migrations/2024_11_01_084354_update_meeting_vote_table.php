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
        Schema::table('meeting_vote', function (Blueprint $table) {
            // Set Foreign Key
            $table->unsignedBigInteger('mid');
            $table->unsignedBigInteger('vid');
            $table->foreign('mid')->references('mid')->on('Meeting');
            $table->foreign('vid')->references('vid')->on('Vote');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('meeting_vote', function (Blueprint $table) {
            //
            $table->dropColumn('mid');
            $table->dropColumn('vid');
        });
    }
};
