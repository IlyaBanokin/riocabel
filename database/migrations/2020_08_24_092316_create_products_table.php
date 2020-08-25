<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title',255);
            $table->string('slug')->unique();

            $table->bigInteger('category_id')->unsigned();

            $table->text('content')->nullable();

            $table->string('keywords',160)->nullable();
            $table->string('description',180)->nullable();

            $table->string('img')->default('no_image.jpg');

            $table->integer('hit')->default(0);

            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
