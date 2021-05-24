<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\toko;
use Auth;

class HalamanTokoController extends Controller
{
    public function create()
    {
        if(Auth::check())
        {
            $toko = DB::table('toko')->get();
            $alamat = DB::table('alamat')->get();
            return view('home', compact('toko'), compact('alamat'));
        }
        else
        {
            return redirect()->to('/login');
        }
    }

    public function search(Request $request)
    {
    	$toko = DB::table('toko')->where('namatoko', $request->search)->first();
    	$alamat = DB::table('alamat')->get();
    	return view('homesearch', compact('toko'), compact('alamat'));
    }

}