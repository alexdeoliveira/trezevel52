<?php

use Illuminate\DataBase\Schema\Blueprint;

use Illuminate\DataBase\Migrations\Migration;

/**
* Migrations da tag
*/
class CreateTagsTable
{
    public function up()
    {
        Schema::create('trezevel_tags', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('trezevel_tags');
    }
}
