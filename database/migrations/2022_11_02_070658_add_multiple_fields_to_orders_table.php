<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultipleFieldsToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->tinyInteger('available_seats')->default(0)->nullable();
            $table->tinyInteger('no_seats_for_pooling')->default(0)->nullable();
            $table->tinyInteger('is_cab_pooling')->default(0)->nullable()->comment('0-No, 1-Yes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }
}
