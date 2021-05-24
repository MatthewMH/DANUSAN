<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class HistoryController extends Controller
{
	public function create()
	{
		$transaksi = DB::table('transaksi')->where('idorang', Auth()->user()->id)->get();
		$makanan = DB::table('makanan')->get();
		$tokonama = array();
		$makanannama = array();
		$harga = array();
		for($s = 0; $s < sizeof($transaksi); $s++)
		{
			for($t = 0; $t < sizeof($makanan); $t++)
			{
				if($transaksi[$s]->idmakanan == $makanan[$t]->id)
				{
					array_push($makanannama, $makanan[$t]->namamakanan);
					array_push($tokonama, DB::table('toko')->where('id', $makanan[$t]->idtoko)->value('namatoko'));
					array_push($harga, $makanan[$t]->harga);
					break;
				}
			}
		}
		return view('history', compact('transaksi', 'tokonama', 'makanannama', 'harga'));
	}    
}
