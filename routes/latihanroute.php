
<?php

Route::get('/psn', function() {
    return 'Anda Harus Pesan Terlebih Dahulu<br>'
    .'Terima Kasih';
});

Route::get('psn/{makan?}/{minum?}', function ($a = null , $b = null) {
    $psn = "Silahkan Pesan Terlebih Dahulu";
    if (isset($a)) {
        $psn = 'Anda Pesan : ' .$a;
    }
    if (isset($b)) {
        $psn .= ' dan ' .$b;
    }
    return $psn;
});
