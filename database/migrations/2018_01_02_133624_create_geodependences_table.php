<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeodependencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geodependences', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('id');
            $table->string('descripcion', 45);
            $table->integer('geo_dependences_id')->unsigned()->nullable();
            $table->integer('references_id')->unsigned();

            $table->foreign('geo_dependences_id')
                ->references('id')->on('geodependences');
        
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
        Schema::dropIfExists('geodependences');
    }
}
