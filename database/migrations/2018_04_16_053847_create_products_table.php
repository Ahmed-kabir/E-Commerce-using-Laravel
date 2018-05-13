<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->char('product_name');
            $table->char('categoryId');
            $table->char('manufectureId');
            $table->Integer('product_price');
            $table->Integer('product_quantity');
            $table->text('product_short_description');
            $table->text('product_Long_description');
            $table->text('product_image');
            $table->tinyInteger('publication_status');
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
        //
    }
}
