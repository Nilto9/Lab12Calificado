<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
          $table->id();
          $table->string('Calzado');
          $table->string('Tipo');
          $table->string('Color');
          $table->string('Talla');
          $table->string('Marca');
          $table->string('Genero');
          $table->string('Edad');
          $table->string('Pago');
          $table->decimal('Monto', 10, 2);
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
        Schema::dropIfExists('ventas');
    }
}
