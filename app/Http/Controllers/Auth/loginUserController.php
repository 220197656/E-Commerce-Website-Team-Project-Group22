<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Psy\Readline\Hoa\Console;

class loginUserController extends Controller
{
    

    public function authenticate(Request $request): RedirectResponse
    {
        // \Log::info('login method called');
        // \Log::info('Request data: ', $request->all());

        // $request->validate([
        //     'email' => 'required|string',
        //     'password' => 'required|string|min:8',
        // ]);

        // \Log::info('Login validation passed');


        // if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {

        //     \Log::info('Logged in successfully');

        //     return redirect()->intended('dashboard');
        // }
        // else {
        //     \Log::info('failed login');
        //     \Log::info($request->input('email'));
        //     \Log::info($request->input('password'));
        // }


        // $user = User::where('username', $request->input('username'))->first();
        // $passinput  =  $request->input('password');
        // $passdb = $user->password;

        // if(Hash::check($passinput, $passdb)){
        //     \Log::info('Password matches.');
        // }
            


        // if (Hash::check($request->input('password'), $user->password)) {
        //     \Log::info('Password matches.');
        //     // Proceed with login or other actions
        // } else {
        //     \Log::info('Password does not match.');
        //     // Handle incorrect password
        // }

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        \Log::info('passed credentials storage');
        \Log::info($credentials);
        \Log::info('Request data: ', $request->all());

        $user = User::where('email', $request->input('email'))->first();
        $dbpass = $user->password;
        
        \Log::info($dbpass);
    


 
        if (Auth::attempt($credentials)) {
            \Log::info('inside passed auth statement');

            return redirect()->intended('dashboard');
        }
        \Log::info('past auth statement');
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    
    






            
    }
}
