<?php

namespace App\Http\Controllers\Email;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class VerificarEmailController extends Controller
{
    public function store($token)
    {
        $user = User::where('token', $token)->first();

        if ($user != null) {
            $user->verificado = '1';
            $user->token = '0';

            $user->save();

            return view('auth.verificacionEmail.correcto');
            //return redirect()->route('web.index');
        } else {
            return view('auth.verificacionEmail.incorrecto');
        }
    }
}
