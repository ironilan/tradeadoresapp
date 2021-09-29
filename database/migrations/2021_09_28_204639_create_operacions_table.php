<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operacions', function (Blueprint $table) {
            $table->id();
            $table->decimal('precio_entrada')->nullable();
            $table->decimal('precio_salida')->nullable();
            $table->enum('movimiento', ['alta', 'baja'])->default('baja');
            $table->string('porcentaje')->nullable();
            $table->string('lotaje')->nullable();
            $table->string('rentabilidad')->nullable();
            $table->string('precio_actual')->nullable();
            $table->enum('estado', ['abierto', 'cerrado'])->default('cerrado');
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
        Schema::dropIfExists('operacions');
    }
}
