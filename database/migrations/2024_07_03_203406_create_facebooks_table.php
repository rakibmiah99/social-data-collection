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
        Schema::create('facebooks', function (Blueprint $table) {
            $table->id();
            $table->string('links', 1000)->nullable();
            $table->string('user_id')->nullable();
            $table->string('group_id')->nullable();
            $table->string('name')->nullable();
            $table->string('image', 1500)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facebooks');
    }
};
