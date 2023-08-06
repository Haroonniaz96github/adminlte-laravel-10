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
        Schema::create('roznamchas', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->foreignId('user_id')->onDelete('cascade');
            $table->string('sr_no');
            $table->longText('detail');
            $table->date('afghani_date');
            $table->date('date');
            $table->date('afghani');
            $table->string('afghani_total');
            $table->string('pakistani_total');
            $table->string('total_name');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roznamchas');
    }
};
