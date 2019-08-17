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

    $data = [
        'O nama' => [
            'url' => 'o-nama',
            'image' => 'about.jpg'
        ],
        'krediti' => [
            'url' => 'krediti',
            'image' => 'loan.jpg'
        ],
        'osiguranje' => [
            'url' => 'osiguranje',
            'image' => 'deal.jpg'
        ],
        'fondovi' => [
            'url' => 'fondovi',
            'image' => 'fonds.jpg'
        ],
        'consulting' => [
            'url' => 'consulting',
            'image' => 'consulting.jpg'
        ],
        'auto' => [
            'url' => 'auto',
            'image' => 'car.jpg'
        ],
        'education' => [
            'url' => 'edukacije',
            'image' => 'education.jpg'
        ],
        'web' => [
            'url' => 'web',
            'image' => 'web.jpg'
        ],
        'loyalti' => [
            'url' => 'loyalti',
            'image' => 'loyalti.jpg'
        ],

    ];


    return view('pages/homepage', ['data' => $data]);
});

Route::get('/kontakt', function() {
    return view('pages/contact');
});

Route::get('krediti', function() {
   $data = [
       'keš krediti' => [
           'url' => 'kes-krediti',
           'image' => 'loan.jpg'
       ],
       'refinansirajući' => [
           'url' => 'refinansirajuci',
           'image' => 'loan.jpg'
       ],
       'auto krediti' => [
           'url' => 'auto-krediti',
           'image' => 'loan.jpg'
       ],
       'stambeni krediti' => [
           'url' => 'stambeni-krediti',
           'image' => 'houseCredit.jpg'
       ],
       'potrošački krediti' => [
           'url' => 'potrosacki-krediti',
           'image' => 'consumerCredit.jpg'
       ],
   ];
   return view('pages/homepage', ['data' => $data]);
});

Route::get('osiguranje', function() {
    $data = [
        'putno osiguranje' => [
            'url' => 'putno-osiguranje',
            'image' => 'travel.jpg'
        ],
        'osiguranje od ao' => [
            'url' => 'osiguranje-od-ao',
            'image' => 'carInsurance.jpg'
        ],
        'kasko osiguranje' => [
            'url' => 'kasko-osiguranje',
            'image' => 'carInsurance'
        ],
        'osiguranje imovine' => [
            'url' => 'osiguranje-imovine',
            'image' => 'house.jpg'
        ],
        'životno osiguranje' => [
            'url' => 'zivotno-osiguranje',
            'image' => 'life.jpg'
        ],
    ];
    return view('pages/homepage', ['data' => $data]);
});

Route::any('/{any}', function($any) {
    return \App\Http\Controllers\ViewController::getViewFromPageName($any);
});

/* ================== Homepage + Admin Routes ================== */

