<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/route1', function () {
//     return 'Nama route1: Rafli Saputra';
// });

// Route::get('/route2', function () {
//     return 'Nama route2 : Rafli Saputra';
// });

// Route::get('/route3', function () {
//     return 'Nama route3 : Rafli Saputra';});

// Route::get('/route4', function () {
//     return 'Nama route4 : Rafli Saputra';
// });

// Route::get('/route5', function () {
//     return 'Nama route5 : Rafli Saputra';
// });

Route::get('biodata/{nama}/{alamat}/{sekolah}/{umur}', function ($a,$b,$c,$d) {
    return 'Nama : '.$a.'<br>Alamat : '.$b.'<br>Sekolah : '.$c.'<br>Umur : '.$d;
});
