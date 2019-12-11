<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('reference')->nullable();
            $table->float('stock')->default(0);
            $table->float('buffer')->default(0);
            $table->float('quantity_per_carton')->default(1);
            $table->float('conditioning_per_carton')->default(1);
            $table->float('price')->default(0);
            $table->unsignedBigInteger('provider_id');
            $table->foreign('provider_id')->references('id')->on('provider')->onDelete('cascade');
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
        Schema::dropIfExists('product');
    }
}
