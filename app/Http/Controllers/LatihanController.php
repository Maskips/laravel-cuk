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

//TUGAS CONTROLLER JABATAN
    public function tugas() {
        $data = [
            ['Nama'=>'Raflisaputraa', 'Agama'=>'Islam', 'Alamat'=>'Kopo', 'JK'=>'Laki', 'Jabatan'=>'Manager', 'Jam Kerja'=>280],
            ['Nama'=>'Kiplii', 'Agama'=>'Islam', 'Alamat'=>'Cibaduyut', 'JK'=>'Laki', 'Jabatan'=>'Sekretaris', 'Jam Kerja'=>300],
            ['Nama'=>'Badud', 'Agama'=>'Islam', 'Alamat'=>'Sadang', 'JK'=>'Laki', 'Jabatan'=>'Staf', 'Jam Kerja'=>100],
        ];
        foreach ($data as $val => $key) {
            if ($key['Jabatan'] == 'Manager') {
                $jabat = 500000;
            }
            else if ($key['Jabatan'] == 'Sekretaris') {
                $jabat = 350000;
            }
            else if ($key['Jabatan'] == 'Staf') {
                $jabat = 250000;
            }
            $bonus = 0;
            $pp = 0.025 * $jabat;
            $bon = ($jabat * $bonus) - $pp;
            echo "Nama : " .$key['Nama'].
             "<br> Agama : " .$key['Agama'].
             "<br> Alamat : " .$key['Alamat'].
             "<br> JK : " .$key['JK'].
             "<br> Jabatan : " .$key['Jabatan'].
             "<br> Jam Kerja : " .$key['Jam Kerja'].
             "<br> Gaji : " .$jabat;
             "<br> PP : " .$pp;
             "<br> Bonus : " .$bonus;
            echo "<hr>";
        }
    }

}
