<?php

Route::get('pesan/{makan?}/{minum?}/{price?}', function ($a = null , $b = null , $c = null) {
    $psn = "Silahkan Pesan Terlebih Dahulu";
    if (isset($a)) {
        $psn = 'Anda Pesan : ' .$a;
    }
    if (isset($b)) {
        $psn .= ' dan ' .$b;
    }

    $psv = '<br>Ukuran : ';
    if ($c <= 0) {
        $psn .= $psv. "Harga Tidak Valid" ;
    }
    else if ($c >= 35000) {
        $psn .= $psv. "Medium" ;
    }
    else if ($c >= 25000) {
        $psn .= $psv. "Large" ;
    }
    else if ($c < 25000) {
        $psn .= $psv. "Small" ;
    }

    return $psn;
});
