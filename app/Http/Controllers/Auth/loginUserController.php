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

class loginUserController extends Controller
{

    public function login(Request $request)
    {
        \Log::info('login method called');
        \Log::info('Request data: ', $request->all());
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string|min:8',
        ]);
        \Log::info('Login validation passed');

        // if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {

        //     \Log::info('Logged in successfully');

        //     return redirect()->intended('dashboard');
        // }
        $user = User::where('username', $request->input('username'))->first();

        $hashpass = Hash::make($request->input('password'));
        \Log::info($hashpass);
        $hashpass = Hash::make($request->input('password'));
        \Log::info($hashpass);
        \Log::info('$2y$12$vT2rkcRQ8Z2i8vBT7LYDQeg2NFlotl7793uG76QwwDStZDesEkeu2');

        if ($user && Hash::check($request->input('password'), $user->password)) {
            \Log::info('match');
        } else {
            \Log::info('notmatch');
        }


    }
}