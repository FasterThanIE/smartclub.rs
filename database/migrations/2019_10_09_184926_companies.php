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


/**
 *
 *
var elements = [];
$("#data tr .item").each(function() {

var id = $(this).parent().attr('id');

var tempData = {
'ime': $(this).find('a').text(),
'detailed_informations': "http://www.scoring.rs"+$(this).find('a').attr('href'),
'Opstina': 'Novi Sad'
};


$(this).find(".detailsitem div").each(function() {
var tmpElement = $(this).find(".infolabel").text();

if(tmpElement != "")
{
tempData[tmpElement] = $(this).find('.info').text()
}

});

$("#"+id).next().each(function() {
var counter = 0;
$(this).find("td").each(function() {
switch(counter)
{
case 0: tempData['MB'] = $(this).text(); break;
case 1: tempData["PIB"] = $(this).text(); break;
case 2: tempData["Aktiva"] = $(this).text(); break;
case 3: tempData["Prihodi"] = $(this).text(); break;
case 4: tempData["Neto D/G"] = $(this).text(); break;
case 5: tempData["Zaposleni"] = $(this).text(); break;
case 6: tempData["Scoring"] = $(this).text(); break;
}
counter++;
});
});
elements.push(tempData);

});

console.log(elements);
 *
 */