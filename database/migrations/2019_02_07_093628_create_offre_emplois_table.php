<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffreEmploisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offre_emplois', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_employer')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('id_categorie')->references('id')->on('categories')->onDelete('cascade');
            $table->text('profil');
            $table->text('durée');
            $table->string('lieu_travail');
            $table->boolean('actif')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('offre_emplois');
    }
}
