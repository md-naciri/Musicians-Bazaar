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
        Schema::create('instruments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('title');
            $table->string('slug');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->integer('category_id');
            $table->integer('subcategory_id')->nullable();
            $table->text('text');
            $table->string('price');
            $table->string('inst_condition');
            $table->string('adress')->nullable();
            $table->integer('country_id');
            $table->integer('state_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->string('phone')->nullable();
            $table->integer('article_status')->default(1);
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
        Schema::dropIfExists('instruments');
    }
};
