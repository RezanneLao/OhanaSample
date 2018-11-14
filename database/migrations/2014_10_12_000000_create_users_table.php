<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('lastName');
            $table->string('gender');
            $table->string('livingStatus')->default('living');
            $table->date('birthDate');
            $table->string('birthPlace')->nullable();
            $table->string('photoURL')->nullable();
            $table->string('streetAddress')->nullable();
            $table->string('barangay')->nullable();
            $table->string('city')->nullable();
            $table->integer('postalCode')->nullable();
            $table->boolean('merged')->default(0);
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
        Schema::dropIfExists('users');
    }
}
