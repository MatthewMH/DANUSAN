<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\transaksi;
use Auth;

class TransaksiController extends Controller
{
   	public function save_to_db(Request $request)
   	{
   		date_default_timezone_set("Asia/Jakarta");
   		if(isset($request->buy))
   		{
   			$idtoko = DB::table('toko')->where('namatoko', $request->namatoko)->value('id');
            $idmakanan = DB::table('makanan')->where('namamakanan', $request->namamakanan)->where('idtoko',$idtoko)->value('id');
            $transaksi = new transaksi();
            $transaksi->idorang = Auth()->user()->id;
            $transaksi->idtoko = $idtoko;
            $transaksi->idmakanan = $idmakanan;
            $transaksi->tanggaltransaksi = date("d m Y");
            $transaksi->tanggalpengambilan = date("d m Y", strtotime('+3 days'));
            $transaksi->jumlah = $request->jumlah;
            $transaksi->totalharga = $request->total;
            $transaksi->save();

            return redirect()->to('/home/history/'.Auth()->user()->id);
   		}
   		else
   		{
   			return redirect()->to('/home/'.$request->namatoko.'/'.Auth()->user()->id);
   		}
   	}
}
