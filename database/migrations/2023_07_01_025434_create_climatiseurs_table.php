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
        Schema::create('climatiseurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('site_id')->constrained();
            $table->string('marque');
            $table->string('type_climatiseur');
            $table->string('type_split')->nullable();
            $table->string('chevaux');
            $table->string('sommes_chevaux');
            $table->string('photo')->nullable()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('climatiseurs');
    }
};
