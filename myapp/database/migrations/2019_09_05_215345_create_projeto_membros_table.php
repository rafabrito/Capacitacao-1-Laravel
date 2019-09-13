<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetoMembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projeto_membros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_membro')->unsigned();
            $table->integer('id_projeto')->unsigned();
            $table->string('horas_trabalhadas')->nullable();
            $table->date('data_alocacao');
            $table->timestamps();

            $table->foreign('id_membro')
                ->references('id')
                ->on('membros')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_projeto')
                ->references('id')
                ->on('projetos')
                ->onDelete('cascade')
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
        Schema::dropIfExists('projeto_membros');
    }
}
