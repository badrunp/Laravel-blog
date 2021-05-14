<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function index(){
        return view('auth.signup');
    }

    public function store(Request $request){
        
        $this->validate($request, [
            'username' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $signup = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        if($signup){
            auth()->attempt($request->only('email', 'password'));
        }else{
            abort(404);
        }

        return redirect()->route('auth.login');    
    }
}
