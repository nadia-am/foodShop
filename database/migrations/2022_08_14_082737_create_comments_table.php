<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('comment');

            $table->unsignedBigInteger('parent_id')->default(0);

            $table->foreignId('user_id')
                    ->constrained('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreignId('restaurant_id')
                    ->constrained('restaurants')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->boolean('approved')->default(false);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
