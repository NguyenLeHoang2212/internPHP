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
        Schema::create('study_abroad', function (Blueprint $table) {
            $table->id();
            $table->text('job')->nullable();
            $table->string('address', 255)->nullable();
            $table->string('status')->nullable();
            $table->string('salary')->nullable();
            $table->string('company', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('study_abroad');
    }
};
