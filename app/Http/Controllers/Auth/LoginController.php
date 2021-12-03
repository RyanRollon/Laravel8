<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;     //Auth
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        
        return view('auth.login');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

         //Validation 
        if(!Auth::attempt([
            'email' => $request->email, 
            'password' => $request->password,
           ]))
           {
                return back()->with('status', 'Invalid login details');
           } 
   
           return redirect()->route('dashboard');
    }



}
