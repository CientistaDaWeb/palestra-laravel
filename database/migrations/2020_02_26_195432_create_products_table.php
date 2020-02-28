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
        Schema::create(
            'products',
            function (Blueprint $table) {
                $table->bigIncrements('id')->unsigned();
                $table->timestamps();
                $table->softDeletes();
                $table->text('name');
                $table->integer('code');
                $table->longText('description');
                $table->smallInteger('width')->unsigned();
                $table->smallInteger('height')->unsigned();
            }
        );
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
