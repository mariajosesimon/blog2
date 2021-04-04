<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEntradaIdToComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comentarios', function (Blueprint $table) {

            // Sintaxis abreviada, utilizando las convenciones del ORM
            $table->foreignId('entrada_id')->constrained()->onDelete('cascade');

            // Sintaxis completa, personalizable
            //$table->unsignedBigInteger('entrada_id');
            //$table->foreign('entrada_id')->references('id')->on('entradas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comentarios', function (Blueprint $table) {
            //
        });
    }
}
