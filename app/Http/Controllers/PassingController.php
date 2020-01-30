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
        return view("latihan", ('data'->$siswa));
    }
    public function pass2() {
        $tabungan = \App\Tabungan::all()->take(10);
        return view("latihan2", compact('tabungan'));
    }
}
