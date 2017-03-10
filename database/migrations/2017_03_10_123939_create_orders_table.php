<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string("auto_year")->nullable();
            $table->string("auto_brand")->nullable();
            $table->string("auto_type")->nullable();
            $table->string("auto_mod")->nullable();
            $table->integer("service_id")->nullable();
            $table->string("order_date")->nullable();
            $table->string("order_time")->nullable();
            $table->string("fio");
            $table->string("phone")->nullable();
            $table->string("avto_nomer")->nullable();
            $table->string("email")->nullable();
            $table->integer("remind")->nullable();
            $table->text("comments")->nullable();
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
        Schema::dropIfExists('orders');
    }
}
