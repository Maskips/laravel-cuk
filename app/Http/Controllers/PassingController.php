<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;

class PassingController extends Controller
{
    public function pass() {
        $data = "REZA OKTO";
        return view("latihan", compact('data'));
    }
    public function pass1() {
        $siswa = [
            'nama'=>'Kismin', 'kelas'=>'XI RPL 1',
            'nama'=>'Kosmon', 'kelas'=>'XI RPL 2',
        ];
        return view("latihan1", ('data'->$siswa));
    }
    public function pass3($id) {
        $tabungan = \App\Tabungan::findOrFail($id);
        return view("latihan3", compact('$tabungan'));
    }
    public function pass2($id) {
        $tabungan = \App\Tabungan::findOrFail($id);
        return view("latihan3", compact('$tabungan'));
    }

}
