<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificacionCorreo;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);


        $token = '1423';

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'token' => $token,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Mail::to($request->email)->send(new VerificacionCorreo($token));

        //Auth::login($user);

        $verificado = User::where('email', $request->email)->select('verificado')->first();

        if ($verificado == '1') {
            return redirect()->route('dashboard.index');
        } else {
            return view('auth.verificacionEmail.incorrecto');
        }
    }
}
