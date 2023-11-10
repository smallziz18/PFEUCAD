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
        Schema::create('annonce', function (Blueprint $table) {
            $table->id('idAnnonce');
            $table->unsignedBigInteger('idUser');
            $table->foreign('idUser')->references('idUser')->on('users');
            $table->string('titre');
            $table->text('description');
            $table->bigInteger('prix');
            $table->string('categorie');
            $table->boolean('statu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonce');
    }
};
