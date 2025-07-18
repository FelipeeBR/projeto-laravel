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
        Schema::create('gados', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 45)->unique()->nullable();
            $table->double('leite');
            $table->double('racao');
            $table->double('peso');
            $table->date('data_nascimento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gados');
    }
};
