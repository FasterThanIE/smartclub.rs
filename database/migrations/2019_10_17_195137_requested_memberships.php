<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RequestedMemberships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requested_memberships', function(Blueprint $table) {
            $table->increments('id' );
            $table->string('company_name' ,55);
            $table->string('address' , 75);
            $table->integer('pib');
            $table->integer('mb');
            $table->integer('postal_code');
            $table->integer('telephone');
            $table->string('email', 55);
            $table->string('location', 25);
            $table->string('contact_name', 50);
            $table->integer('job_code');
            $table->string('status', 10);
            $table->string('package', 15);
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
        //
    }
}
