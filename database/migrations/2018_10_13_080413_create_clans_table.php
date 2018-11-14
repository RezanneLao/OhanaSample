<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clans', function (Blueprint $table) {
            $table->increments('cid');
            $table->integer('clanId');
            $table->integer('id')->unsigned();
            $table->integer('pid')->unsigned()->nullable();
            $table->string('relationship')->nullable();
            $table->string('maritalStatus')->nullable();

            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('pid')->references('pid')->on('potentialUsers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clans');
    }
}
