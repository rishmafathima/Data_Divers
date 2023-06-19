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
        Schema::create('tb_shipping', function (Blueprint $table) {
            $table->id();
            $table->integer('shp_cid')->nullable();
            $table->integer('shp_oid')->nullable();
            $table->string('shp_cname')->nullable();
            $table->string('shp_caddress')->nullable();
            $table->string('shp_cstate')->nullable();
            $table->integer('shp_cPostalCode')->nullable();
            $table->string('shp_cContact')->nullable();
            $table->date('shp_date')->nullable();
            $table->integer('shp_status')->nullable();
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
        Schema::dropIfExists('shipping');
    }
};
