<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\transkasi;
use Auth;

class ProsesPembelianController extends Controller
{
    public function create(Request $request)
    {
    	if(Auth::check())
    	{
    		return view('prosespembelian', compact('request'));
    	}
    	else
    	{
    		return redirect()->to('/login');
    	}
    }

    public function process(Request $request)
    {
        if(isset($request->cancel))
        {
            return redirect()->to('/home/'.$request->namatoko.'/'.Auth()->user()->id);
        }
        else if(isset($request->buy))
        {
            return view('konfirmasipembelian', compact('request'));
        }
    }
}
