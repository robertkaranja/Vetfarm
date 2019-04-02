<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('products')){

        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->longtext('description');
            $table->integer('price')->unsigned();
            $table->string('location');
            $table->integer('user_id')->unsigned();
            $table->string('username');
            /**$table->string('image');**/
            $table->foreign('user_id')->references('id')->on('users');
           /** $table->foreign('username')->references('name')->on('users');*/
            $table->timestamps();
        });

}
            Schema::table('products', function (Blueprint $table) {
                
                
                
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
