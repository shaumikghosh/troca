<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstagramInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instagram_infos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('user_name')->unique();
            $table->integer('followers');
            $table->integer('followings');
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
        Schema::dropIfExists('instagram_infos');
    }
}
