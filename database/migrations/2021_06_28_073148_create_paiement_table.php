<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiement', function (Blueprint $table) {
            $table->id('id_paiement');
            $table->integer('matricule');
            $table->unsignedBigInteger('id_achat');
            $table->foreign('id_achat')->references('id_achat')->on('achat_p');
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
        Schema::dropIfExists('paiement');
    }
}
