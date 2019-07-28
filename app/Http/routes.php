<?php
if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages/homepage');
});

Route::get('/glavna', function () {
    return view('pages/homepage');
});

Route::get('/kontakt', function() {
    return view('pages/contact');
});

Route::get('/permalink', function() {
    return view('pages/permalink');
});


Route::get('/kes-krediti', function() {
    return view('pages/permalink', ['page' => 'cash_credits']);
});

Route::get('/refinansirajuci', function() {
    return view('pages/permalink', ['page' => 'refinancing']);
});

Route::get('/auto-krediti', function() {
    return view('pages/permalink', ['page' => 'car_credits']);
});

Route::get('/stambeni-krediti', function() {
    return view('pages/permalink', ['page' => 'house_credits']);
});

/* ================== Homepage + Admin Routes ================== */

require __DIR__.'/admin_routes.php';
