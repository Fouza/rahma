<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assurances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('assurance')->nullable();
            //$table->datetime('assuranceDebut')->nullable();
            $table->datetime('assuranceFin')->nullable();
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
        Schema::dropIfExists('assurances');
    }
}
