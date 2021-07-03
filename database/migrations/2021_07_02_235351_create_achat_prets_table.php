<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchatPretsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achat_prets', function (Blueprint $table) {
            $table->id('id_achat');
            $table->string('type');
            $table->string('titre');
            $table->float('somme_max');
            $table->date('date_fin_prevue');
            $table->date('date_fin_reel');
            $table->unsignedBigInteger('id_operation');
            $table->foreign('id_operation')->references('id')->on('operations');
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
        Schema::dropIfExists('achat_prets');
    }
}
