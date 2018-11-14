<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePotentialUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('potentialUsers', function (Blueprint $table) {
            $table->increments('pid');
            $table->string('email')->unique()->nullable();
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('lastName');
            $table->string('gender');
            $table->string('livingStatus');
            $table->date('birthDate');
            $table->string('birthPlace')->nullable();
            $table->string('photoURL')->nullable();
            $table->boolean('merged')->default(0);
            $table->string('relationship');
            $table->string('role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('potentialUsers');
    }
}
