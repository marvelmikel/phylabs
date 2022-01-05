<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNeutronParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('neutron_parameters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('element');
            $table->double('mass_removal_xcs')->nullable();
            
            $table->nullableTimestamps();
            $table->foreign('element')->references('symbol')->on('elements')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('neutron_parameters');
    }
}
