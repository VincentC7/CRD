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
    public function up()
    {
        Schema::create('candidatures', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_offre');
            $table->unsignedInteger('id_candidat');
            $table->string('etat')->default('En attente');
            $table->string('lieuDep')->default(null);
            $table->boolean('transport');
            $table->boolean('vehiculeNormal');
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
