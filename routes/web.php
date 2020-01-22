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

// Route::get('/', function () {
//     return view('welcome');
// });



// LATIHAN ROUTE
// Route::get('/pesan', function() {
//     return 'Anda Harus Pesan Terlebih Dahulu<br>'
//     .'Terima Kasih';
// });

// Route::get('pesan/{makan?}/{minum?}/{price?}', function ($a = null , $b = null , $c = null) {
//     $psn = "Silahkan Pesan Terlebih Dahulu";
//     if (isset($a)) {
//         $psn = 'Anda Pesan : ' .$a;
//     }
//     if (isset($b)) {
//         $psn .= ' dan ' .$b;
//     }

//     $psv = '<br>Ukuran : ';
//     if ($c <= 0) {
//         $psn .= $psv. "Harga Tidak Valid" ;
//     }
//     else if ($c >= 35000) {
//         $psn .= $psv. "Medium" ;
//     }
//     else if ($c >= 25000) {
//         $psn .= $psv. "Large" ;
//     }
//     else if ($c < 25000) {
//         $psn .= $psv. "Small" ;
//     }

//     return $psn;
// });


Route::get('/test_tni', function() {
    return 'Selamat Datang Di Acara Test TNI <br>'
    .'Terima Kasih';
});

Route::get('test_tni/{nama?}/{bb?}/{umur?}', function ($a = null , $b = null , $c = null) {
    $psn = "Silahkan Daftar kan Diri Terlebih Dahulu";
    if (isset($a)) {
        $psn = '<b>Nama</b> : ' .$a;
    }
    // if (isset($b)) {
    //     $psn = '<b>Berat Badan</b> : ' .$b;
    // }
    // if (isset($c)) {
    //     $psn = '<b>Umur</b> : ' .$c;
    // }

    $ps = '<br><b>Berat Badan</b> : ';
    if ($b < 50) {
        $psn .= $ps . $b . " (Anda kurang nutrisi)" ;
    }
    else if ($b >= 76 || $b >= 100) {
        $psn .= $ps . $b . " (Anda harus turun berat badan)" ;
    }
    else if ($b >= 66 || $b >= 75) {
        $psn .= $ps . $b . " (Berat badan anda ideal)" ;
    }
    else if ($b >= 50 || $b >= 64) {
        $psn .= $ps . $b . " (Naikan berat badan anda) <br>" ;
    }

    $psi = '<br><b>Umur</b> : ';
    if ($c >= 30 && $c <= 40) {
        $psn .= $psi . $c . " (Perwira)" ;
    }
    else if ($c >= 40 && $c <= 50) {
        $psn .= $psi . $c . " (Laksamana)" ;
    }
    else if ($c >= 50 && $c <= 60) {
        $psn .= $psi . $c . " (Jendral)" ;
    }

    return $psn;
});
