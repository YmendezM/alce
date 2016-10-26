<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_users')->unsigned();
            $table->foreign('id_users')->references('id')->on('users');
            $table->integer('id_tipo')->unsigned();
            $table->foreign('id_tipo')->references('id')->on('message_type');
            $table->integer('id_visibility')->unsigned();
            $table->foreign('id_visibility')->references('id')->on('visibility');
            $table->integer('id_rol')->unsigned();
            $table->foreign('id_rol')->references('id')->on('rol');
            $table->string('message');
            $table->rememberToken();
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
        Schema::drop('messages');
    }
}
