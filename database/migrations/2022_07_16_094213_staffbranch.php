<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Staffbranch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('staffbranch',function(Blueprint $table){
            $table->string('staffNo');
            $table->string('sName');
            $table->string('position');
            $table->string('salary');
            $table->string('brancehNo');
            $table->string('bAddress');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('staffbranch');
    }
}
