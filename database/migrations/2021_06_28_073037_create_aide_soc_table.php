<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAideSocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aide_soc', function (Blueprint $table) {
            $table->id('id_aide');
            $table->float('montant');
            $table->string('titre');
            $table->unsignedBigInteger('id_operation');
            $table->foreign('id_operation')->references('id')->on('operation');
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
        Schema::dropIfExists('aide_soc');
    }
}
