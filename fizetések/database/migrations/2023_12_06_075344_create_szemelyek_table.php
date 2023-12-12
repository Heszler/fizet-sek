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
        Schema::create('szemelyek', function (Blueprint $table) {
            $table->id();
            $table->string('Nev');
            $table->integer('bér (Ft/h)');
            $table->integer('ledorak');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szemelyek');
    }
};
