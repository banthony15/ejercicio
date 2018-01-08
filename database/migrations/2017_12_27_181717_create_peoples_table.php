<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreatePeoplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peoples', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('id');
            $table->string('cedula', 45)->unique();
            $table->string('credencial', 45)->unique();
            $table->string('name_1', 45);
            $table->string('name_2', 45)->nullable();
            $table->string('lastname_1', 45);
            $table->string('lastname_2', 45)->nullable();
            $table->integer('sexo_id')->unsigned();
            $table->integer('status_id')->unsigned();           

        
            $table->foreign('sexo_id')
                ->references('id')->on('rferences');
        
            $table->foreign('status_id')
                ->references('id')->on('rferences');
        
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
        Schema::dropIfExists('peoples');

    }
}