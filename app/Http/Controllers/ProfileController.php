<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\orangdanusan;
use Auth;
use Validator;

class ProfileController extends Controller
{
    public function create()
    {
    	return view('profile');
    }
    public function edit(Request $request)
    {
        //dd($request->fotoprofil->extension());
        $imageExtensions = ['jpg', 'jpeg', 'png'];
        $validator = Validator::make($request->all(), [
            'profil' => 'max:5120', //5MB 
        ]);
        if($validator->fails())
        {
            return redirect()->to('/editprofile/exception2/'.Auth()->user()->id);
        }
        if($request->fotoprofil == NULL)
        {
            return redirect()->to('/editprofile/exception3/'.Auth()->user()->id);
        }
        if (!in_array($request->fotoprofil->extension(), $imageExtensions)) 
        {
            return redirect()->to('/editprofile/exception1/'.Auth()->user()->id);
        }
    	$user = orangdanusan::find(Auth()->user()->id);
    	$user->profil = Auth()->user()->username.'.'.$request->fotoprofil->extension();
    	$request->fotoprofil->move(public_path('profile/'.$user->username), $user->profil);
   		$user->save();
   		return redirect()->to('/editprofile/'.Auth()->user()->id);
    }
    public function view_exception1()
    {
        return view('profile_exception1');
    }
    public function view_exception2()
    {
        return view('profile_exception2');
    }
    public function view_exception3()
    {
        return view('profile_exception3');
    }
}
