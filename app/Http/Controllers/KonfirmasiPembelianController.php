<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonfirmasiPembelianController extends Controller
{
    public function create(Request $request)
    {
    	return view('konfirmasipembelian');
    }
}
