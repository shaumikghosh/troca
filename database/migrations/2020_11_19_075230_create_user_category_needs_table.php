<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCategoryNeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_category_needs', function (Blueprint $table) {
            $table->id();
            $table->integer('costs');
            $table->integer('followers_category');

            $table->bigInteger('buy_followers_table_id')->unsigned();

            $table->foreign('buy_followers_table_id')
                ->references('id')
                ->on('buy_followers')
                ->onDelete('CASCADE');
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
        Schema::dropIfExists('user_category_needs');
    }
}
