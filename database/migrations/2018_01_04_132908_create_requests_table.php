<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        Schema::create('requests', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('id');
            $table->date('fecha');
            $table->string('desc_solicitud', 45);
            $table->integer('peoples_id')->unsigned();
            $table->integer('geodependences_id')->unsigned();
            

        
            $table->foreign('peoples_id')
                ->references('id')->on('peoples');
        
            $table->foreign('geodependences_id')
                ->references('id')->on('geodependences');
        
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
        Schema::dropIfExists('requests');
    }
}
