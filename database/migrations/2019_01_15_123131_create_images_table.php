<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pics');
            $table->integer('listing_id')->unsigned();
            $table->string('user_id');
            $table->string('title');
            
           $table->foreign('listing_id')->references('id')
            ->on('listings')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            
           
  
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
        Schema::dropIfExists('images');
    }
}
