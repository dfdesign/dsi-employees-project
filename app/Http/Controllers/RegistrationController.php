<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
        
        $user = User::create(request(['name', 'email', 'password']));
        auth()->login($user);
        
        return redirect()->to('/employees');
    }
}
