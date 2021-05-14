<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth/login');
    }

    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(!auth()->attempt($request->only('email', 'password'), $request->remember)){
            session()->flash('message', 'Invalid email or password');
            return back();
        }
        
        session()->regenerate();
        return redirect()->route('home');
    }
}
