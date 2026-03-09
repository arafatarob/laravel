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
        Schema::create('sing_ups', function (Blueprint $table) {
            $table->id();
            $table->string('Order_id', 20);
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('phone', 15);
            $table->string('address', 255);
            $table->string('country', 30);
            $table->string('zip_code', 4);
            $table->string('email', 64)->unique();
            $table->string('password', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sing_ups');
    }
};
