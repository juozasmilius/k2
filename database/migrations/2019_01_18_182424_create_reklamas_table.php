<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReklamasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reklamas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('pavadinimas');
            $table->longtext('trumpas_aprasymas');
            $table->longtext('aprasymas');
            $table->longtext('adresas');
            $table->string('miestas');
            $table->string('rajonas');
            $table->string('valstybe');
            $table->string('tipas');
            $table->longtext('svetaine');
            $table->text('koordinates');
            $table->text('koordinates2');
            $table->string('paveikslelis');
            $table->integer('terminas');
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
        Schema::dropIfExists('reklamas');
    }
}
