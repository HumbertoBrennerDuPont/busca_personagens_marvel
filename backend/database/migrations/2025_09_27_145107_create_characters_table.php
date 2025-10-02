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
    Schema::create('characters', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('image_url')->nullable();
        $table->string('occupation')->nullable();
        $table->string('real_name')->nullable();
        $table->string('first_appearance')->nullable();
        $table->text('description')->nullable();
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('characters');
}
};
