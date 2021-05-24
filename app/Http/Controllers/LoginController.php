<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\orangdanusan;
use Input;

class LoginController extends Controller
{
    public function create()
    {
    	return view('login');
    }

    public function in(Request $request)
    {
    	$validated = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

    	if($validated->fails())
    	{
    		return redirect()->to('/login_exception2');
    	}
        else
        {
            $credentials = array('username'=> request()->username, 'password' => request()->password);
        }
    	if (Auth::attempt($credentials)) 
    	{
            return redirect()->to('/home/'.auth()->user()->id);
        }
        else
        {
        	return redirect()->to('/login_exception');
        }
    }

    public function exception1()
    {
        return view('login_exception');
    }

    public function exception2()
    {
        return view('login_exception2');
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
