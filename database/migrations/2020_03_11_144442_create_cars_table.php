<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('marque')->nullable();
            $table->string('model')->nullable();
            $table->string('matricule')->unique();
            $table->string('etat')->default('Disponible');
            /*$table->datetime('ctrlTechDebut')->nullable();
            $table->datetime('assuranceDebut')->nullable();
            $table->datetime('ctrlTechFin')->nullable();
            $table->datetime('assuranceFin')->nullable();*/
            $table->integer('capacite')->nullable();
            $table->year('year')->nullable();
            $table->string('photo')->nullable();
            $table->unsignedBigInteger('driver_id')->nullable();
            $table->unsignedBigInteger('partner_id');

            $table->foreign('driver_id')->references('id')->on('drivers');
            $table->foreign('partner_id')->references('id')->on('partners');
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
        Schema::dropIfExists('cars');
    }
}
