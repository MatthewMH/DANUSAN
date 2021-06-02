<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\orangdanusan;
use Auth;

class ProfileController extends Controller
{
    public function create()
    {
    	return view('profile');
    }
    public function edit(Request $request)
    {
    	$user = orangdanusan::find(Auth()->user()->id);
        if($request->fotoprofil == NULL)
        {
            return redirect()->to('/editprofile/'.Auth()->user()->id);
        }
    	$user->profil = Auth()->user()->username.'.'.$request->fotoprofil->extension();
    	$request->fotoprofil->move(public_path('profile/'.$user->username), $user->profil);
   		$user->save();
   		return redirect()->to('/editprofile/'.Auth()->user()->id);
    }
}
