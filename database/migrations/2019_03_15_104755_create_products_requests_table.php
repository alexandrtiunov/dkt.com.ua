<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_requests', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('pr_id');
            $table->foreign('pr_id')->references('id')->on('products');

            $table->unsignedBigInteger('request_id');
            $table->foreign('request_id')->references('id')->on('requests');

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
        Schema::dropIfExists('products_requests');
    }
}
