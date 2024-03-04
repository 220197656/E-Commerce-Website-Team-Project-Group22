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
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        \Log::info('Store method called');

        $request->validate([
            'Username' => ['required', 'string', 'max:255', 'unique:clients,Username'],
            'Password' => ['required', 'string', 'min:8', 'confirmed'],
            'Email' => ['required', 'string', 'email', 'max:255', 'unique:clients,Email'],
            'PhoneNumber' => ['required', 'string', 'regex:/^[\d\s+\-()]*$/', 'unique:clients,PhoneNumber'],
            'FirstName' => ['required', 'string', 'max:255'],
            'LastName' => ['required', 'string', 'max:255'],
        ]);
        \Log::info('Validation passed');
        
        try {
            $clients = User::create([
                'Username' => $request->Username,
                'Email' => $request->Email,
                'Password' => Hash::make($request->Password),
                'PhoneNumber' => $request->PhoneNumber,
                'FirstName' => $request->FirstName,
                'LastName' => $request->LastName,
            ]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            // Optionally, return an error response
            return redirect()->back()->withErrors(['msg' => 'User creation failed'])->withInput();

        }


        // $user = ::create([
        //     'username' => $request->Username,
        //     'email' => $request->Email,
        //     'password' => Hash::make($request->Password),
        //     'phone_number' => $request->PhoneNumber,
        //     'first_name' => $request->FirstName,
        //     'last_name' => $request->LastName,
        // ]);

        event(new Registered($clients));

        Auth::login($clients);

        return redirect()->intended('dashboard');
    }
}