<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabunganController extends Controller
{
    // METHOD INDEX
    public function index() {
        $tabungan = \App\Tabungan::all();
        return $tabungan;
    }

    // METHOD STORE ( TAMBAH )
    public function store($nis, $nama, $kelas, $jml) {
        $tabungan = new \App\Tabungan();
        $tabungan->nis = $nis;
        $tabungan->nama = $nama;
        $tabungan->kelas = $kelas;
        $tabungan->jml = $jml;
        $tabungan->save();
        return $tabungan;
    }

    // METHOD SHOW
    public function show($id) {
        $tabungan = \App\Tabungan::find($id);
        return $tabungan;
    }

    // METHOD EDIT
    public function edit($id, $nis, $nama, $kelas, $jml) {
        $tabungan = \App\Tabungan::find($id);
        $tabungan->nis = $nis;
        $tabungan->nama = $nama;
        $tabungan->kelas = $kelas;
        $tabungan->jml = $jml;
        $tabungan->save();
        return $tabungan;
    }

    // METHOD DELETE
    public function delete($id) {
        $tabungan = \App\Tabungan::find($id);
        $tabungan->delete();
        return $tabungan;
    }
}
