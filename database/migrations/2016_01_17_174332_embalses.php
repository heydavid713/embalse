<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Embalses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \Schema::create('embalses', function (Blueprint $table) {
            $table->string('nombre');
            $table->string('slug');
            $table->string('siteID');
            $table->decimal('latitude');
            $table->decimal('longitude');
            $table->decimal('desborde');
            $table->decimal('seguridad');
            $table->decimal('observacion');
            $table->decimal('ajuste');
            $table->decimal('control');
            $table->decimal('capacidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \Schema::drop('embalses');
    }
}
