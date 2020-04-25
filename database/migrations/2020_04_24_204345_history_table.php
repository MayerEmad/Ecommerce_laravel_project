<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            
            $table->bigInteger('user_id')->unsigned();
            $table->string('product_name');
            $table->integer('product_quantity');
            $table->double('product_price',10,5);
            $table->double('product_total_cost',10,5);
            $table->string('image');
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
        Schema::dropIfExists('history');    
    }
}
