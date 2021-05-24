<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\simpanan;
use Auth;

class SimpananController extends Controller
{
    public function create()
    {
        if(Auth::check())
        {
            $saved = DB::table('simpanan')->where('idorang', Auth()->user()->id)->get();
            $toko = DB::table('toko')->get();
            $chosennama = array();
            $chosenkontak = array();
            for($s = 0; $s < sizeof($saved); $s++)
            {
                for($t = 0; $t < sizeof($toko); $t++)
                {
                    if($saved[$s]->idtoko == $toko[$t]->id)
                    {
                        array_push($chosennama, $toko[$t]->namatoko);
                        array_push($chosenkontak, $toko[$t]->kontaktoko);
                        break;
                    }   
                }
            }
            return view('simpanan', compact('chosennama'), compact('chosenkontak'));
        }
        else
        {
            return redirect()->to('/login');
        }
    }

    public function saves(Request $request)
    {
    	$toko = DB::table('toko')->where('namatoko', $request->namatoko)->first();
    	$saved = DB::table('simpanan')->where('idorang', Auth()->user()->id)->where('idtoko', $toko->id)->first();
    	if($saved == NULL)
    	{
    		$simpanan = new simpanan();
    		$simpanan->idorang = Auth()->user()->id;
    		$simpanan->idtoko = $toko->id;
    		$simpanan->save();
    		return redirect()->to('/home/simpanan/'.Auth()->user()->id);
    	}
    	else
    	{
    		DB::table('simpanan')->where('idorang', Auth()->user()->id)->where('idtoko',$toko->id)->delete();
    		return redirect()->to('/home/simpanan/'.Auth()->user()->id);
    	}
    }
}
