<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pavadinimas');
            $table->longtext('trumpas_aprasymas');
            $table->longtext('aprasymas');
            $table->longtext('adresas');
            $table->string('miestas');
            $table->string('rajonas');
            $table->string('apskritis');
            $table->string('valstybe');
            $table->string('tipas');
            $table->string('tipas2');
            $table->string('parkas');
            $table->string('poilsis');
            $table->string('svarba');
            $table->longtext('svetaine');
            $table->longtext('saltinis');
            $table->longtext('straipsnis');
            $table->text('koordinates');
            $table->text('koordinates2');
            $table->string('paveikslelis');
            $table->string('paveikslelis2');
            $table->string('paveikslelis3');
            $table->string('paveikslelis4');
            $table->string('paveikslelis5');
            $table->integer('patinka');
            $table->integer('nepatinka');
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
        Schema::dropIfExists('places');
    }
}
