<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryProductTable extends Migration
{

    public function up()
    {
        Schema::create('category_product', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id')
                  ->constrained('categories')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->foreignId('restaurant_id')
                  ->constrained('restaurants')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->unique(['restaurant_id','category_id']);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('category_product');
    }
}
