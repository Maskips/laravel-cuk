<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemainBolaController extends Controller
{
    public function index() {
        $out = \App\PemainBola::all();
        return view('index', compact('out'));
    }
    public function index2() {
        $out = \App\PemainBola::find($id);
        return view('index2', compact('out'));
    }
}
