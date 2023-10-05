<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioadministrativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarioadministrativos', function (Blueprint $table) {
            $table->id();
            $table->string('NOMBRE',45);
            $table->string('APE_P',45);
            $table->string('APE_M',45);
            $table->string('DNI',8);
            $table->unsignedBigInteger('cargo_id')->unique()->nullable();
            $table->foreign('cargo_id')
                  ->references('id')
                  ->on('cargos')
                  ->onDelete('set null')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarioadministrativos');
    }
}
