<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Autor');
            $table->string('DescripcionC');
            $table->string('Portada');
            $table->text('description');
            $table->string('ISBN');
            $table->string('Editorial');
            $table->string('Npaginas');
            $table->string('Edicion');
            $table->string('Pais');
            $table->string('Anio');
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
        Schema::dropIfExists('menus');
    }
}
