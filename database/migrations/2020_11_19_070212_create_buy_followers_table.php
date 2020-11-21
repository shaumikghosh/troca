<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyFollowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_followers', function (Blueprint $table) {
            $table->id();
            $table->string('insta_username');
            $table->integer('followers_number');
            $table->timestamps();
            $table->integer('costs');
            $table->integer('followers_category');

            $table->bigInteger('user_id')->unsigned();

            $table->foreign('user_id')
                ->references('user_id')
                ->on('user_statuses')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buy_followers');
    }
}
