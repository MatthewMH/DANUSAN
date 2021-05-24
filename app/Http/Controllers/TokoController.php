<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class TokoController extends Controller
{
    public function create(Request $request)
    {
        if(Auth::check())
        {
            $toko = DB::table('toko')->where('namatoko', $request->namatoko)->first();
            $makanan = DB::table('makanan')->where('idtoko', $toko->id)->get();
            $simpanan = DB::table('simpanan')->where('idtoko', $toko->id)->get();
            if($simpanan->isEmpty())
            {
                $simpan = 0;
            }
            else
            {
                for($s = 0; $s < sizeof($simpanan); $s++)
                {
                    if($simpanan[$s]->idorang == Auth()->user()->id)
                    {
                        $simpan = 1;
                        break;
                    }
                    else
                    {
                        $simpan = 0;
                    }
                }
            }
            return view('toko', compact('toko', 'makanan', 'simpan'));
        }
    	else
        {
            return redirect()->to('/login');
        }
    }

}
