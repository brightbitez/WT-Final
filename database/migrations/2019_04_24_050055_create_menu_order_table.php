<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_order', function (Blueprint $table) {
            $table->bigInteger('order_id')->unsigned()->nullable();
            $table->foreign('order_id')->references('id')
                ->on('orders');

            $table->bigInteger('menu_id')->unsigned()->nullable();
            $table->foreign('menu_id')->references('id')
                ->on('menus');

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
        Schema::dropIfExists('menu_order');
    }
}
