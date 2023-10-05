<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariotituladosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuariotitulados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nombreinstitucion_id');
            $table->foreign('nombreinstitucion_id')->references('id')->on('nombreinstitucions');
            $table->string('APE_PAT',45);
            $table->string('APE_MAT',45);
            $table->string('NOMBRES',45);
            $table->string('DOCU_TIP',10);
            $table->string('DOCU_NUM',8);
            $table->string('NUM_TITU',15);
            $table->string('NOMBRE_TITU',45);
            $table->unsignedBigInteger('nivelformacion_id');
            $table->foreign('nivelformacion_id')->references('id')->on('nivelformacions');
            $table->date('TITU_FEC');
            $table->string('REG_TITU_NUM',45);
            $table->string('RESO_TITU_NUM',20);
            $table->date('REG_TITU_FEC');
            $table->string('REG_TITU_LIBRO',30);
            $table->string('FOLIO_TITU_NUM',30);
            $table->unsignedBigInteger('usuarioadministrativo_idDIR');
            $table->foreign('usuarioadministrativo_idDIR')->references('id')->on('usuarioadministrativos');
            $table->unsignedBigInteger('usuarioadministrativo_idSA');
            $table->foreign('usuarioadministrativo_idSA')->references('id')->on('usuarioadministrativos');
            $table->unsignedBigInteger('usuarioadministrativo_idSG');
            $table->foreign('usuarioadministrativo_idSG')->references('id')->on('usuarioadministrativos');
            $table->unsignedBigInteger('usuarioadministrativo_idRAC');
            $table->foreign('usuarioadministrativo_idRAC')->references('id')->on('usuarioadministrativos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuariotitulados');
    }
}
