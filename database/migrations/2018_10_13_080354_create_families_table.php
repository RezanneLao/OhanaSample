<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('families', function (Blueprint $table) {
            $table->increments('fid');
            $table->integer('familyId');
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
        Schema::dropIfExists('families');
    }
}
