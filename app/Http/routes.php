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
require __DIR__.'/admin_routes.php';

Route::get('/', function () {
    return view('pages/homepage');
});

Route::get('/kontakt', function() {
    return view('pages/contact');
});

Route::any('/{any}', function($any) {
    return \App\Http\Controllers\ViewController::getViewFromPageName($any);
});

/* ================== Homepage + Admin Routes ================== */

