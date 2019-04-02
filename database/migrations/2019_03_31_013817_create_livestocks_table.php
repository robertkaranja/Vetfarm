<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivestocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  
        if(!Schema::hasTable('livestocks')){
        Schema::create('livestocks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('weight')->unsigned();
            $table->integer('age')->unsigned();
            $table->longtext('health_details');
            $table->integer('user_id')->unsigned();
            $table->string('username');
            $table->timestamps();

        });

    }
    Schema::table('livestocks', function (Blueprint $table) {
                
                
                
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livestocks');
    }
}
