<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('picture')->nullable();
            $table->string('mobile', 11)->nullable()->unique();
            $table->string('email')->nullable()->unique();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->boolean('is_blocked')->default(false);
            $table->unsignedBigInteger('wallet')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
