<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CostumerController extends Controller
{
    // METHOD INDEX
    public function index() {
        $costu = \App\Costumer::all();
        return $costu;
    }

    // METHOD STORE ( TAMBAH )
    public function store($code, $name, $email, $country ) {
        $costu = new \App\Costumer();
        $costu->nis = $code;
        $costu->nama = $name;
        $costu->kelas = $email;
        $costu->jml = $country ;
        $costu->save();
        return $costu;
    }

    // METHOD SHOW
    public function show($id) {
        $costu = \App\Costumer::find($id);
        return $costu;
    }

    // METHOD EDIT
    public function edit($id, $code, $name, $email, $country ) {
        $costu = \App\Costumer::find($id);
        $costu->nis = $code;
        $costu->nama = $name;
        $costu->kelas = $email;
        $costu->jml = $country;
        $costu->save();
        return $costu;
    }

    // METHOD DELETE
    public function delete($id) {
        $costu = \App\Costumer::find($id);
        $costu->delete();
        return $costu;
    }
}
