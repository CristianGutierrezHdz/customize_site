<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Run the migrations.
    public function up(): void
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('site_web_id')->unique(); // FK -> 'site_web_id' / (1:1)
            $table->string('titulo');
            $table->string('imagen');
            $table->string('link');
            $table->string('spam');
            $table->boolean('activo')->default(true);
            $table->timestamps();
        });
    }

    // Reverse the migrations.
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};