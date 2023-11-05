<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function index()
    {
        return view('site.login.index');
    }

    public function store(Request $request)
    {
        $credenciais = $request->only('usuario', 'password');

    if (Auth::attempt($credenciais)) {
        
        return redirect()->route('artistas');
    } else {
        
        session()->flash('error', 'Credenciais inválidas');
        return redirect()->route('login');
    }
    }
    
    public function destroy()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}









