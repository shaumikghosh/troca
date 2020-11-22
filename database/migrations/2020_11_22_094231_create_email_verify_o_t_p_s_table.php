<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailVerifyOTPSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_verify_o_t_p_s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('email_verify_otp');
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
        Schema::dropIfExists('email_verify_o_t_p_s');
    }
}
