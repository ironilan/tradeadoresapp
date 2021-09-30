<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entradas', function (Blueprint $table) {
            $table->id();
            $table->enum('movimiento', ['alta', 'baja'])->default('baja');
            $table->decimal('precio_entrada')->nullable();
            $table->decimal('precio_salida')->nullable();
            $table->datetime('fecha')->nullable();
            $table->unsignedBigInteger('accion_id')->nullable();
            $table->foreign('accion_id')->references('id')->on('accions')->onDelete('cascade');
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
        Schema::dropIfExists('entradas');
    }
}
