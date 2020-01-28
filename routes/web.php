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

//MENCARI SEMUA MODEL
// Route::get('/testmodel', function() {
//     $query = App\Post::all();
//     return $query;
// });

//MENCARI MODEL BERDASARKAN ID
// Route::get('/testmodel_id', function() {
//     $query = App\Post::find(1);
//     return $query;
// });

//MENCARI MODEL BERDASARKAN TITLE
// Route::get('/testmodel_title', function() {
//     $query = App\Post::where('title','like','%cepat nikah%')->get();
//     return $query;
// });

//MENGUBAH RECORD (HAPUS SEMUA ISI FUNCTION)
// Route::get('/testmodel_ubah', function() {
//     $post = App\Post::find(1);
//     $post->title = "Ciri Keluarga Sakinah Mawadah Warohmah";
//     $post->save();
//     return $post;
// });

//MENGHAPUS RECORD (HAPUS SEMUA ISI FUNCTION)
// Route::get('/testmodel_hapus', function() {
//     $post = App\Post::find(1);
//     $post->delete();
//     return $post;
// });

//MENAMBAH RECORD (HAPUS SEMUA ISI FUNCTION
// Route::get('/testmodel_tambah', function() {
//     $post = new App\Post;
//     $post->title = "7 Amalan Pembuka Jodoh";
//     $post->content = "shalat malam, sedekah, puasa sunah, silahturahmi, senyum, doa, tobat,";
//     $post->save();
//     return $post;
// });



// Route::get('/test_tni', function() {
//     return 'Selamat Datang Di Acara Test TNI <br>'
//     .'Terima Kasih';
// });

// Route::get('test_tni/{nama?}/{bb?}/{umur?}', function ($a = null , $b = null , $c = null) {
//     $psn = "Silahkan Daftar kan Diri Terlebih Dahulu";
//     if (isset($a)) {
//         $psn = '<b>Nama</b> : ' .$a;
//     }
    // if (isset($b)) {
    //     $psn = '<b>Berat Badan</b> : ' .$b;
    // }
    // if (isset($c)) {
    //     $psn = '<b>Umur</b> : ' .$c;
    // }

//     $ps = '<br><b>Berat Badan</b> : ';
//     if ($b < 50) {
//         $psn .= $ps . $b . " (Anda kurang nutrisi)" ;
//     }
//     else if ($b >= 76 || $b >= 100) {
//         $psn .= $ps . $b . " (Anda harus turun berat badan)" ;
//     }
//     else if ($b >= 66 || $b >= 75) {
//         $psn .= $ps . $b . " (Berat badan anda ideal)" ;Route::get('tugaslaravel', function() {

//     }
//     else if ($b >= 50 || $b >= 64) {
//         $psn .= $ps . $b . " (Naikan berat badan anda) <br>" ;
//     }

//     $psi = '<br><b>Umur</b> : ';
//     if ($c >= 30 && $c <= 40) {
//         $psn .= $psi . $c . " (Perwira)" ;
//     }
//     else if ($c >= 40 && $c <= 50) {
//         $psn .= $psi . $c . " (Laksamana)" ;
//     }
//     else if ($c >= 50 && $c <= 60) {
//         $psn .= $psi . $c . " (Jendral)" ;
//     }

//     return $psn;
// });



//TUGAS LARAVEL JUMAT BERKAH
Route::get('tugaslaravel/select', function() {
    $query = App\TabelTugas::select('sekolah', 'alamat', 'hobi')->first();
    return $query;
});

//ROUTE MENGAMBIL 3 FIELD
Route::get('tugaslaravel/ambil', function() {
    $query = App\TabelTugas::all()->take(3);
    return $query;
});

//ROUTE MENGAMBIL
Route::get('tugaslaravel/tambah/{nama}/{sekolah}/{jenis_kelamin}/{alamat}/{tgl_lahir}/{umur}/{hobi}',
    function($nama, $sekolah, $jenis_kelamin, $alamat, $tgl_lahir, $umur, $hobi) {
    $query = new App\TabelTugas;
    $query->nama          = $nama;
    $query->sekolah       = $sekolah;
    $query->Jenis_kelamin = $jenis_kelamin;
    $query->alamat        = $alamat;
    $query->tgl_lahir     = $tgl_lahir;
    $query->umur          = $umur;
    $query->hobi          = $hobi;
    $query->save();
    return $query;
});

//ROUTE CONTROLLER
Route::get('latihan1/{a?}/{b?}/{c?}', 'LatihanController@halo1');
// Route::get('latihan2', 'LatihanController@halo2');
// Route::get('latihan3', 'LatihanController@halo3');
// Route::get('latihan4', 'LatihanController@halo4');

//ROUTE CONTROLLER ARRAY
Route::get('data1', 'LatihanController@loop');
