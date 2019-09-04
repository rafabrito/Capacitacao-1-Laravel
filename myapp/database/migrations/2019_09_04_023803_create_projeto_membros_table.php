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
            $table->bigIncrements('id');
            $table->integer('id_membro')->unsigned();
            $table->integer('id_projeto')->unsigned();
            $table->timestamps();

            $table->foreingn('id_membro')
                ->refereces('id')
                ->on('membros');

            $table->foreingn('id_projeto')
                ->references('id')
                ->on('projetos');
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
