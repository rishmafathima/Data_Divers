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
        Schema::create('tb_order', function (Blueprint $table) {
            $table->id();
            $table->date('o_dateIssued');
            $table->integer('o_deliveryOrder');
            $table->integer('o_cust');
            $table->integer('o_item');
            $table->integer('o_qty');
            $table->float('o_totalAmount');
            $table->float('o_tax');
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
        Schema::dropIfExists('order');
    }
};
