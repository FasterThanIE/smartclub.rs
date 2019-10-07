<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CashCreditsRequests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_credits_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->integer('phone_number');
            $table->date('date_of_birth');
            $table->string('email', 64);
            $table->string('gender', 6);
            $table->string('job', 50);
            $table->string('location', 128);
            $table->string('insurance_length');
            $table->string('health', 10);
            $table->dateTime('requested_on');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
