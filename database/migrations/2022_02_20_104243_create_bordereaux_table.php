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
        Schema::create('bordereau', function (Blueprint $table) {
            $table->id();
            $table->string('code_bordereau', 20);
            $table->integer('quantite');
            $table->integer('prix');
            $table->integer('total');
            $table->timestamps();
            
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
