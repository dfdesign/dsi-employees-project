<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create()
    {
        if (Auth::check()) {
            return redirect()->to('/employees');
        }
        return view('registration.login');
    }
    
    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        
        return redirect()->to('/employees');
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/login');
    }
}
