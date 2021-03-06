<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('candidatures', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_offre')->references('id')->on('offre_emplois');;
            $table->unsignedInteger('id_candidat')->references('id')->on('users');
            $table->string('etat')->default('En attente');
            $table->string('lieuDep')->nullable();
            $table->boolean('transport')->default(0);
            $table->string('typeVehicule')->nullable();
            $table->string('infos')->nullable();
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
        Schema::dropIfExists('candidatures');
    }
}
