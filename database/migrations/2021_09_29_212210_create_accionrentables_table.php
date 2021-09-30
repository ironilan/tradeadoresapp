<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccionrentablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accionrentables', function (Blueprint $table) {
            $table->id();
            $table->decimal('precio')->nullable();
            $table->string('porcentaje')->nullable();
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
        Schema::dropIfExists('accionrentables');
    }
}
