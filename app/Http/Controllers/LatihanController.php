<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    // public function halo1() {
    //     $a = 10;
    //     $b = 10;

    //     $hasil = $a + $b;
    //     return 'Penjumlahan Dari Angka ' .$a. ' + ' .$b. ' Adalah : ' .$hasil;
    // }
    // public function halo2() {
    //     $a = 10;
    //     $b = 10;

    //     $hasil = $a - $b;
    //     return 'Pengurangan Dari Angka ' .$a. ' - ' .$b. ' Adalah : ' .$hasil;
    // }
    // public function halo3() {
    //     $a = 10;
    //     $b = 10;

    //     $hasil = $a * $b;
    //     return 'Perkalian Dari Angka ' .$a. ' * ' .$b. ' Adalah : ' .$hasil;
    // }
    // public function halo4() {
    //     $a = 10;
    //     $b = 10;

    //     $hasil = $a / $b;
    //     return 'Pembagian Dari Angka ' .$a. ' / ' .$b. ' Adalah : ' .$hasil;
    // }

    public function halo1($a = null, $b = null, $c = null) {
        $psn = "Anda Harus Masukan Operator Terlebih Dahulu";

        if (isset($a) || isset($b)) {
            $psn = 'Anda Baru Memasukan 1 Angka';
        }
        if (isset($b) && isset($a)) {
            $c = $a + $b;
            $psn = "Output-an nya :<br>" ."$a + $b = $c";
        }
        return $psn;
    }

    public function loop() {
        $data = [
            ['Nama'=>'David', 'Kelas'=>'XI RPL 1', 'Uang Jajan'=>10000],
            ['Nama'=>'Rudi',  'Kelas'=>'XI RPL 1', 'Uang Jajan'=>25000],
            ['Nama'=>'Sandi', 'Kelas'=>'XI RPL 2', 'Uang Jajan'=>50000],
            ['Nama'=>'Surya', 'Kelas'=>'XI RPL 3', 'Uang Jajan'=>25000],
            ['Nama'=>'Kipli', 'Kelas'=>'XI RPL 1', 'Uang Jajan'=>10000],
        ];
        foreach ($data as $val => $key) {

            if ($key['Uang Jajan'] >= 50000) {
                $tabungan = $key['Uang Jajan'] * 25 / 100;
                $sisa = $key['Uang Jajan'] - $tabungan;
            }
            else if ($key['Uang Jajan'] >= 25000) {
                $tabungan = $key['Uang Jajan'] * 15 / 100;
                $sisa = $key['Uang Jajan'] - $tabungan;
            }
            else if ($key['Uang Jajan'] >= 10000) {
                $tabungan = $key['Uang Jajan'] * 10 / 100;
                $sisa = $key['Uang Jajan'] - $tabungan;
            }

        echo "Nama : " .$key['Nama'].
             "<br> Kelas : " .$key['Kelas'].
             "<br> Uang Jajan : " .$key['Uang Jajan'].
             "<br> Uang Tabungan : " .$tabungan.
             "<br> Sisa Uang Jajan : " .$sisa;
        echo "<hr>";
        }
    }


    public function tugas() {
        $data = [
            ['Nama'=>'Raflisaputraa', 'Agama'=>'Islam', 'Alamat'=>'Kopo', 'JK'=>'Laki', 'Jabatan'=>'Manager',
            'Jam Kerja'=>2],
        ];
        foreach ($data as $val => $key) {
            if ($key['Jabatan'] => Manager) {
                $manager = $key['Manager'];
            }
        }
    }

}
