<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaImoveis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis', function(Blueprint $table) {
            $table->increments('id');
            $table->string('tipo', 20);
            $table->string('venda',10);
            $table->string('endereco',100);
            $table->string('valor');
            $table->integer('dono_email');

            $table->foreign('dono_email')
                ->references('email')
                ->on('users');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('imoveis');    
    }


}