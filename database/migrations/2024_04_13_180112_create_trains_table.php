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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Azienda', 20);
            $table->string('Stazione di partenza', 35);
            $table->string('Stazione di arrivo', 35);
            $table->time('Orario di partenza', $precision = 0);
            $table->time('Orario di arrivo', $precision = 0);
            $table->integer('Codice Treno')->unique();
            $table->smallInteger('Numero Carrozze');
            $table->boolean('In orario');
            $table->boolean('Cancellato');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
