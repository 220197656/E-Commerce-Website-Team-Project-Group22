<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Psy\Readline\Hoa\Console;



class RegisteredUserController extends Controller
{
    public function store(Request $request)
    {
        \Log::info('Store method called');

        $request->validate([
            'username' => ['required', 'string', 'max:255', 'unique:clients,username'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:clients,email'],
            'phoneNumber' => ['required', 'string', 'regex:/^[\d\s+\-()]*$/', 'unique:clients,phoneNumber'],
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
        ]);
        \Log::info('Validation passed');
        
        try {
            $clients = User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phoneNumber' => $request->phoneNumber,
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
            ]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->withErrors(['msg' => 'User creation failed'])->withInput();

        } 

        event(new Registered($clients));

        Auth::login($clients);

        return redirect()->intended('dashboard');
    }
}