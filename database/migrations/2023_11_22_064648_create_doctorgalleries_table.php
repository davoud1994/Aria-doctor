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
        Schema::create('doctorgalleries', function (Blueprint $table) {
            $table->id();
            $table->integer('Docter_id');
            $table->string('image url');
            $table->string('Alt');
            $table->string('Tittle');
            $table->string('Slug')->unique();
            $table->string('Description');
            $table->tinyInteger('IsDelete');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctorgalleries');
    }
};
