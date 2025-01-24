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
        Schema::create('leaderboards', function (Blueprint $table) {
            $table->id();
            $table->string('team_name')->nullable();
            $table->string('team_group')->nullable();
            $table->integer('match_played')->nullable()->default(0);
            $table->integer('win')->nullable()->default(0);
            $table->integer('draw')->nullable()->default(0);
            $table->integer('lose')->nullable()->default(0);
            $table->float('points')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaderboards');
    }
};
