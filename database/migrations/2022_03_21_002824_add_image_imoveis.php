<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageImoveis extends Migration
{
    
    public function up()
    {
        Schema::table('imoveis', function(Blueprint $table) {
           $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('imoveis', function(Blueprint $table) {
           $table->dropColumn('image');
        });   
    }


}