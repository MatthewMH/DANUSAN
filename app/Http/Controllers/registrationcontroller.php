<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\orangdanusan;
use Hash;

class registrationcontroller extends Controller
{
    public function create()
    {
    	return view('signup');
    }

    public function store(Request $request)
    {
        $kontak_regex = "#^(^08)(\d{3,4}-?){2}\d{3,4}$#";
        if(strlen($request->kontak) < 11 || !(preg_match($kontak_regex, $request->kontak)) || strlen($request->kontak) > 13)
        {
            return redirect()->to('/signup_exception3');
        }
        if(strlen($request->email) < 3 || !filter_var($request->email, FILTER_VALIDATE_EMAIL))
        {
            return redirect()->to('/signup_exception4');
        }
        $validated = Validator::make($request->all(), [
            'email' => 'required|email|unique:orangdanusan,email|max:255',
            'username' => 'required|unique:orangdanusan,username|max:255',
            'password' => 'required|max:255',
            'kontak' => 'required|unique:orangdanusan,kontak|max:13'
        ]);
        if($validated->fails())
        {
            if(strlen($request->password) < 8)
            {
                return redirect()->to('/signup_exception2');
            }
            else if(strlen($request->username) > 255)
            {
                return redirect()->to('/signup_exception5');
            }
            else
            {
                return redirect()->to('/signup_exception');
            }
        }
        else
        {
            $user = new orangdanusan();
            $user->email = request()->email;
            $user->username = request()->username;
            $user->password = bcrypt(request()->password);
            $user->kontak = request()->kontak;

            if(Hash::check(request()->konfirmpassword, $user->password))
            {
                $user->save();
                return redirect()->to('/home/'.$user->id);
            }
            else
            {
                return redirect()->to('/signup_konfirmexception');
            }
        }
    }

    public function exception1()
    {
        return view('signup_exception');
    }

    public function exception2()
    {
        return view('signup_konfirmexception');
    }

    public function view_home()
    {
        $toko = DB::table('toko')->get();
        $alamat = DB::table('alamat')->get();
        return view('homeview', compact('toko'), compact('alamat'));
    }
    public function view_exception2()
    {
        return view('signup_exception2');
    }
    public function exception3()
    {
        return view('signup_exception3');
    }
    public function exception4()
    {
        return view('signup_exception4');
    }
    public function exception5()
    {
        return view('signup_exception5');
    }
}

