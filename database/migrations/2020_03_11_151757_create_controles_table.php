<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('contrat')->nullable();
            //$table->datetime('ctrlTechDebut')->nullable();
            $table->datetime('ctrlTechFin')->nullable();
            $table->unsignedBigInteger('car_id');
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
        Schema::dropIfExists('controles');
    }
}
