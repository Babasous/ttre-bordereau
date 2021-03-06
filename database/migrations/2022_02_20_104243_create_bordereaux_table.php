<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bordereaux', function (Blueprint $table) {
            $table->id();
            $table->integer('quantite');
            $table->integer('prix');
            $table->integer('total');
            $table->timestamps();
            
            $table->foreignId('user_id')->constrained();
            $table->foreignId('fournisseur_id')->constrained();
            $table->foreignId('materiel_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bordereau');
    }
};
