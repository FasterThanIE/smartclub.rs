<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Companies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->string('name');
            $table->string('url');
            $table->string('county', 20);
            $table->string('full_name');
            $table->string('location', 20);
            $table->string('address');
            $table->string('phone', 30);
            $table->string('website')->nullable();
            $table->integer('mb');
            $table->integer('pib')->primary();
            $table->integer('active_funds');
            $table->integer('income');
            $table->integer('neto');
            $table->integer('employees');
            $table->string('score', 5);
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
