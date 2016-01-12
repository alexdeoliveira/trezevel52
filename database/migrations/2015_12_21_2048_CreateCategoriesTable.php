<?php

use Illuminate\DataBase\Schema\Blueprint;

use Illuminate\DataBase\Migrations\Migration;

/**
* Migrations da categoria
*/
class CreateCategoriesTable
{
    public function up()
    {
        Schema::create('trezevel_categories', function(Blueprint $table){
            $table->increments('id');
            $table->integer('parent_id')->nullable(true)->unsigned();
            $table->foreign('parent_id')->references('id')->on('trezevel_categories');
            $table->string('name');
            $table->string('slug');
            $table->boolean('active')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('trezevel_categories');
    }
}
