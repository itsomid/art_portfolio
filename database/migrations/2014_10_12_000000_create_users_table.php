<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('job')->nullable();
            $table->string('education')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('phone')->unique()->nullable();
            $table->enum('art_category',['architecture','music','visual','painting','performing','literature','cinema']);
            $table->string('avatar_url')->default('storage/images/profile.jpg');
            $table->string('pdf_url')->nullable();
            $table->string('social_fb')->nullable();
            $table->string('social_in')->nullable();
            $table->text('details')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
