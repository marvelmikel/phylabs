<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElementParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('element_parameters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('energy_level_id');
            $table->unsignedBigInteger('element_id');
            $table->double('coherent_scaterring_xcs')->nullable();
            $table->double('incoherent_scaterring_xcs')->nullable();
            $table->double('photoelectric_absorption_xcs')->nullable();
            $table->double('pair_production_nuclear_xcs')->nullable();
            $table->double('pair_production_electron_xcs')->nullable();
            $table->double('mass_absorption_xcs')->nullable();

            $table->foreign('energy_level_id')->references('id')->on('energy_levels')->onDelete('cascade');
            $table->foreign('element_id')->references('id')->on('elements')->onDelete('cascade');
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
        Schema::dropIfExists('element_parameters');
    }
}
