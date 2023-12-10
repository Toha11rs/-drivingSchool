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
        Schema::create('driving_instructors', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->string("telegram");
            $table->string("phone");
            $table->string("category");
            $table->string("experience");
            $table->bigInteger("car_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driving_instructors');
    }
};
