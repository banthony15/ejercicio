<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rferences', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->integer('id');
            $table->string('descripcion', 45);
            $table->integer('references_id')->unsigned()->nullable();
            
            $table->primary('id');
        
       
            $table->foreign('references_id')
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
        Schema::dropIfExists('rferences');

    }
}

