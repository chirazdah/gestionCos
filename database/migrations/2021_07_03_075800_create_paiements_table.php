<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->id('id_paiement');
            $table->unsignedBigInteger('matricule');
            $table->foreign('matricule')->references('matricule')->on('employers');
            $table->unsignedBigInteger('id_achat');
            $table->foreign('id_achat')->references('id_achat')->on('achat_prets');
            $table->float('somme_retirer');
            $table->date('date_debut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paiements');
    }
}
