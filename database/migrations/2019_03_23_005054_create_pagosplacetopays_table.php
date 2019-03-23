<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagosplacetopaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagosplacetopays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reference');
            $table->integer('sesion');
            $table->string('description');
            $table->string('moneda');
            $table->integer('monto');
            $table->string('status');
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
        Schema::dropIfExists('pagosplacetopays');
    }
}
