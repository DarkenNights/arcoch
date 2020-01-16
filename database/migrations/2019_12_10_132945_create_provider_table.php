<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProviderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('short_name');
            $table->string('color')->nullable();
            $table->string('email')->nullable();
            $table->integer('franco')->nullable();
            $table->text('order_day')->nullable();
            $table->text('shipping_day')->nullable();
            $table->text('address')->nullable();
            $table->text('commercial')->nullable();
            $table->text('phone')->nullable();
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
        Schema::dropIfExists('provider');
    }
}
