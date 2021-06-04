<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\alamat;
use App\Models\toko;
use App\Models\makanan;

class AdminController extends Controller
{
    public function create()
    {
    	return view('admin');
    }
    public function input(Request $request)
    {
    	$admin = DB::table('admin')->where('username', $request->satu)->first();
    	if($admin == NULL)
    	{
    		return redirect()->to('/');
    	}
    	else
    	{
    		$pin = DB::table('admin')->where('username', $request->satu)->where('pin', $request->dua)->first();
    		if($pin == NULL)
    		{
    			return redirect()->to('/');
    		}
    		else
    		{
    			return view('admininput', compact('request'));
    		}
    	}
    }
    public function saves(Request $request)
    {
        if(DB::table('alamat')->where('jalan',$request->jalan)->where('kabupatenkota', $request->kabupatenkota)->where('provinsi', $request->provinsi)->first() == NULL)
        {
            $alamat = new alamat();
            $alamat->jalan = $request->jalan;
            $alamat->kabupatenkota = $request->kabupatenkota;
            $alamat->provinsi = $request->provinsi;
            $alamat->save();

            if(DB::table('toko')->where('namatoko',$request->namatoko)->first() == NULL)
            {
                $toko = new toko();
                $toko->namatoko = $request->namatoko;
                $toko->kontaktoko = $request->kontaktoko;
                $toko->idalamat = $alamat->id;
                $toko->gambartoko = 'Profile.'.$request->gambartoko->extension(); 
                $request->gambartoko->move(public_path('external_images/'.$toko->namatoko), $toko->gambartoko);
                $toko->idadmin = DB::table('admin')->where('username', $request->satu)->value('id');
                $toko->save();

                if($request->namamakanan1 != NULL)
                {
                    $makanan1 = new makanan();
                    $makanan1->namamakanan = $request->namamakanan1;
                    $makanan1->harga = $request->harga1;
                    $makanan1->idtoko = $toko->id;
                    $makanan1->gambarmakanan = $request->namamakanan1.'.'.$request->gambarmakanan1->extension();
                    $request->gambarmakanan1->move(public_path('external_images/'.$toko->namatoko), $makanan1->gambarmakanan);
                    $makanan1->save();
                }
                if($request->namamakanan2 != NULL)
                {
                    $makanan2 = new makanan();
                    $makanan2->namamakanan = $request->namamakanan2;
                    $makanan2->harga = $request->harga2;
                    $makanan2->idtoko = $toko->id;
                    $makanan2->gambarmakanan = $request->namamakanan2.'.'.$request->gambarmakanan2->extension();
                    $request->gambarmakanan2->move(public_path('external_images/'.$toko->namatoko), $makanan2->gambarmakanan);
                    $makanan2->save();
                }
                if($request->namamakanan3 != NULL)
                {
                    $makanan3 = new makanan();
                    $makanan3->namamakanan = $request->namamakanan3;
                    $makanan3->harga = $request->harga3;
                    $makanan3->idtoko = $toko->id;
                    $makanan3->gambarmakanan = $request->namamakanan3.'.'.$request->gambarmakanan3->extension();
                    $request->gambarmakanan3->move(public_path('external_images/'.$toko->namatoko), $makanan3->gambarmakanan);
                    $makanan3->save();
                }
            }
            else
            {
                if($request->namamakanan1 != NULL)
                {
                    $makanan1 = new makanan();
                    $makanan1->namamakanan = $request->namamakanan1;
                    $makanan1->harga = $request->harga1;
                    $makanan1->idtoko = $toko->id;
                    $makanan1->gambarmakanan = $request->namamakanan1.'.'.$request->gambarmakanan1->extension();
                    $request->gambarmakanan1->move(public_path('external_images/'.$toko->namatoko), $makanan1->gambarmakanan);
                    $makanan1->save();
                }
                if($request->namamakanan2 != NULL)
                {
                    $makanan2 = new makanan();
                    $makanan2->namamakanan = $request->namamakanan2;
                    $makanan2->harga = $request->harga2;
                    $makanan2->idtoko = $toko->id;
                    $makanan2->gambarmakanan = $request->namamakanan2.'.'.$request->gambarmakanan2->extension();
                    $request->gambarmakanan2->move(public_path('external_images/'.$toko->namatoko), $makanan2->gambarmakanan);
                    $makanan2->save();
                }
                if($request->namamakanan3 != NULL)
                {
                    $makanan3 = new makanan();
                    $makanan3->namamakanan = $request->namamakanan3;
                    $makanan3->harga = $request->harga3;
                    $makanan3->idtoko = $toko->id;
                    $makanan3->gambarmakanan = $request->namamakanan3.'.'.$request->gambarmakanan3->extension();
                    $request->gambarmakanan3->move(public_path('external_images/'.$toko->namatoko), $makanan3->gambarmakanan);
                    $makanan3->save();
                }
            }
        }
        else
        {
            $alamat = DB::table('alamat')->where('jalan',$request->jalan)->where('kabupatenkota', $request->kabupatenkota)->where('provinsi', $request->provinsi)->first();   
            if(DB::table('toko')->where('namatoko',$request->namatoko)->first() == NULL)
            {
                $toko = new toko();
                $toko->namatoko = $request->namatoko;
                $toko->kontaktoko = $request->kontaktoko;
                $toko->idalamat = $alamat->id;
                $toko->gambartoko = 'Profile.'.$request->gambartoko->extension(); 
                $request->gambartoko->move(public_path('external_images/'.$toko->namatoko), $toko->gambartoko);
                $toko->idadmin = DB::table('admin')->where('username', $request->satu)->value('id');
                $toko->save();

                if($request->namamakanan1 != NULL)
                {
                    $makanan1 = new makanan();
                    $makanan1->namamakanan = $request->namamakanan1;
                    $makanan1->harga = $request->harga1;
                    $makanan1->idtoko = $toko->id;
                    $makanan1->gambarmakanan = $request->namamakanan1.'.'.$request->gambarmakanan1->extension();
                    $request->gambarmakanan1->move(public_path('external_images/'.$toko->namatoko), $makanan1->gambarmakanan);
                    $makanan1->save();
                }
                if($request->namamakanan2 != NULL)
                {
                    $makanan2 = new makanan();
                    $makanan2->namamakanan = $request->namamakanan2;
                    $makanan2->harga = $request->harga2;
                    $makanan2->idtoko = $toko->id;
                    $makanan2->gambarmakanan = $request->namamakanan2.'.'.$request->gambarmakanan2->extension();
                    $request->gambarmakanan2->move(public_path('external_images/'.$toko->namatoko), $makanan2->gambarmakanan);
                    $makanan2->save();
                }
                if($request->namamakanan3 != NULL)
                {
                    $makanan3 = new makanan();
                    $makanan3->namamakanan = $request->namamakanan3;
                    $makanan3->harga = $request->harga3;
                    $makanan3->idtoko = $toko->id;
                    $makanan3->gambarmakanan = $request->namamakanan3.'.'.$request->gambarmakanan3->extension();
                    $request->gambarmakanan3->move(public_path('external_images/'.$toko->namatoko), $makanan3->gambarmakanan);
                    $makanan3->save();
                }
            }
            else
            {
                $toko = DB::table('toko')->where('namatoko',$request->namatoko)->first();
                if($request->namamakanan1 != NULL)
                {
                    $makanan1 = new makanan();
                    $makanan1->namamakanan = $request->namamakanan1;
                    $makanan1->harga = $request->harga1;
                    $makanan1->idtoko = $toko->id;
                    $makanan1->gambarmakanan = $request->namamakanan1.'.'.$request->gambarmakanan1->extension();
                    $request->gambarmakanan1->move(public_path('external_images/'.$toko->namatoko), $makanan1->gambarmakanan);
                    $makanan1->save();
                }
                if($request->namamakanan2 != NULL)
                {
                    $makanan2 = new makanan();
                    $makanan2->namamakanan = $request->namamakanan2;
                    $makanan2->harga = $request->harga2;
                    $makanan2->idtoko = $toko->id;
                    $makanan2->gambarmakanan = $request->namamakanan2.'.'.$request->gambarmakanan2->extension();
                    $request->gambarmakanan2->move(public_path('external_images/'.$toko->namatoko), $makanan2->gambarmakanan);
                    $makanan2->save();
                }
                if($request->namamakanan3 != NULL)
                {
                    $makanan3 = new makanan();
                    $makanan3->namamakanan = $request->namamakanan3;
                    $makanan3->harga = $request->harga3;
                    $makanan3->idtoko = $toko->id;
                    $makanan3->gambarmakanan = $request->namamakanan3.'.'.$request->gambarmakanan3->extension();
                    $request->gambarmakanan3->move(public_path('external_images/'.$toko->namatoko), $makanan3->gambarmakanan);
                    $makanan3->save();
                }
            }
        }
        return redirect()->to('/admin');
    }
}
