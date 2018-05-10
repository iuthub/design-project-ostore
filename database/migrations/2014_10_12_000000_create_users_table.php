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
        Schema::dropIfExists('users');
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('is_admin')->default(false);
            $table->string('firstName');
            $table->string('secondName');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address');
            $table->string('companyName')->default('none');
            $table->string('statecountry');
            $table->string('postzipcode');
            $table->string('phone')->unique();
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
