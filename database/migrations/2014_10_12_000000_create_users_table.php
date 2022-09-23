<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('location')->default('Not found');
            $table->string('avatar');
            $table->boolean('verified_account')->default(0);
            $table->boolean('usertype')->default(0);
            $table->string('username');
            $table->string('country');
            $table->string('gender');
            $table->date('dob');
            $table->string('bio', 200);
            $table->string('latitude', 30)->default('Not found');
            $table->string('longitude', 30)->default('Not found');
            $table->timestamp('last_seen')->nullable();
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
};
