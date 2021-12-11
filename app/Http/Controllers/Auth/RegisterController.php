<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;     //Auth
use Illuminate\Support\Facades\Hash;     //Hash
use App\Models\User;                     //User Model


class RegisterController extends Controller
{
    public function index(){
        return view('auth.register'); 
    }

    public function store(Request $request){
       $this->validate($request, [
           'name' => 'required|max:225',
           'username' => 'required|max:225',
           'email' => 'required|email|max:225',
           'password' => 'required|confirmed',
       ]);

       User::create([
           'name' => $request->name,
           'username' => $request->username,
           'email' => $request->email,
           'password' => Hash::make($request->password),
       ]);

       //sign in
     Auth::attempt([
         'email' => $request->email, 
         'password' => $request->password,
        ]); 

       return redirect()->route('dashboard'); //Importante para makapasok sa dashboard
    }
}
