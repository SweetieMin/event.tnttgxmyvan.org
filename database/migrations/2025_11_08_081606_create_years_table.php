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
        Schema::create('years', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('title');
            $table->string('sub_title')->nullable();
            $table->date('expired_date')->nullable();
            
            $table->string('logo')->nullable();
            $table->string('image_desktop')->nullable();
            $table->string('image_mobile')->nullable();

            $table->date('start_date');
            $table->date('end_date');

            $table->string('first_contact')->nullable();
            $table->string('first_phone')->nullable();

            $table->string('second_contact')->nullable();
            $table->string('second_phone')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('years');
    }
};
