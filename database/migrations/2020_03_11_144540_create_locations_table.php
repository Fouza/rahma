<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('driver_id');
            $table->string('nom');
            $table->string('prenom');
            $table->unsignedBigInteger('car_id');
            $table->string('matricule');
            $table->datetime('dateDebut');
            $table->datetime('dateFin');
            $table->string('contrat')->nullable();
            $table->foreign('driver_id')->references('id')->on('drivers');
            $table->foreign('car_id')->references('id')->on('cars')->delete('cascade');
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
        Schema::dropIfExists('locations');
    }
}
